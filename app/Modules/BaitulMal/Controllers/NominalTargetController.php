<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\NominalTargetModel;
use App\Modules\BaitulMal\Models\NominalTargetFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class NominalTargetController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\nominal_target\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/nominaltarget';
    protected $langModel = 'nominal_target';
    protected $modelName = 'App\Modules\Api\Models\NominalTargetModel';
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
        $model = model(NominalTargetFilter::class);
        return [
            'headers' => [
                                    'staff_id' => lang('crud.staff_id'),
                'terkumpul_nominal' => lang('crud.terkumpul_nominal'),
                'target_nominal' => lang('crud.target_nominal'),
                'created_by' => lang('crud.created_by'),
                'updated_by' => lang('crud.updated_by')
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
        $model = new NominalTargetModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        
        return $dataEdit;
    }
}
