<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\TugasTimModel;
use App\Modules\BaitulMal\Models\TugasTimFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class TugasTimController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tugas_tim\\';
    protected $baseRoute = 'admin/baitulmal/tugastim';
    protected $langModel = 'tugas_tim';
    protected $modelName = 'App\Modules\Api\Models\TugasTimModel';
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
        $model = model(TugasTimFilter::class);
        return [
            'headers' => [
                                    'id_staff' => lang('crud.id_staff'),
                'tugas' => lang('crud.tugas'),
                'nominal' => lang('crud.nominal'),
                'created_by' => lang('crud.created_by'),
                'updated_by' => lang('crud.updated_by'),
                'progres' => lang('crud.progres')
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
        $model = new TugasTimModel();

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
