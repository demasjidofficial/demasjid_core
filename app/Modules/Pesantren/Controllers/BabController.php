<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\BabModel;
use App\Modules\Pesantren\Models\BabFilter;

class BabController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\bab\\';
    protected $baseRoute = ADMIN_AREA.'/pesantren/bab';
    protected $langModel = 'bab';
    protected $modelName = 'App\Modules\Api\Models\BabModel';
    public function index()
    {
        return parent::index();
    }

    public function edit($id = null)
    {
        return parent::edit($id);
    }

    public function update($id = null)
    {
        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(BabFilter::class);
        return [
            'headers' => [
                'pelajaran_id' => lang('crud.pelajaran_id'),
                'name' => lang('crud.name'),
                'sequence' => lang('crud.sequence'),
                // 'created_by' => lang('crud.created_by')
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
        $model = new BabModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['pelajaranItems'] = Arr::pluck(model('App\Modules\Api\Models\PelajaranModel')->select(['pelajaran.id as key', 'pelajaran.name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
