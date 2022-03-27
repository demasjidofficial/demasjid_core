<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\KelasModel;
use App\Modules\Pesantren\Models\KelasFilter;

class KelasController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\kelas\\';
    protected $baseRoute = 'admin/pesantren/kelas';
    protected $langModel = 'kelas';
    protected $modelName = 'App\Modules\Api\Models\KelasModel';
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
        $model = model(KelasFilter::class);
        $entities = $this->listPesantrenEntity();        
        $model->whereIn('entity_id', $entities);
        return [
            'headers' => [
                                    'name' => 'name',
                'description' => 'description',
                'level' => 'level',
                'capacity' => 'capacity',
                'duration' => 'duration',
                'uom_id' => 'uom_id',
                'entity_id' => 'entity_id',
                'created_by' => 'created_by'
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
        $model = new KelasModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            // $dataEdit['uomItems'] = ['1' => 'Jam', '2' => 'Hari'];
            $dataEdit['uomItems'] = Arr::pluck(model('App\Modules\Api\Models\UomModel')->select(['uom.id as key','uom.name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
    
            $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['entity.id as key','entity.name as text'])->pesantren()->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}