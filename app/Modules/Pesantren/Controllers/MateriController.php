<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\MateriModel;
use App\Modules\Pesantren\Models\MateriFilter;

class MateriController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\materi\\';
    protected $baseRoute = 'admin/pesantren/materi';
    protected $langModel = 'materi';
    protected $modelName = 'App\Modules\Api\Models\MateriModel';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(MateriFilter::class);
        return [
            'headers' => [
                                    'bab_id' => lang('crud.bab_id'),
                'name' => lang('crud.name'),
                'duration' => lang('crud.duration'),
                'uom_id' => lang('crud.uom_id'),
                'sequence' => lang('crud.sequence'),
                'created_by' => lang('crud.created_by')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new MateriModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['babItems'] = Arr::pluck(model('App\Modules\Api\Models\BabModel')->select(['bab.id as key','bab.name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
    $dataEdit['uomItems'] = Arr::pluck(model('App\Modules\Api\Models\UomModel')->select(['uom.id as key','uom.name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}
