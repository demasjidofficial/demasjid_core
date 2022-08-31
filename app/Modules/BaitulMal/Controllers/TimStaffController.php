<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TimStaffModel;
use App\Modules\BaitulMal\Models\TimStaffFilter;

class TimStaffController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tim_staff\\';
    protected $baseRoute = 'admin/baitulmal/timstaff';
    protected $langModel = 'tim_staff';
    protected $modelName = 'App\Modules\Api\Models\TimStaffModel';
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
    public function tim($id = null){
        return parent::tim($id);
    }

    public function create(){
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(TimStaffFilter::class);
        return [
            'headers' => [
                                    'id_tim' => lang('crud.id_tim'),
                'id_user' => lang('crud.id_user'),
                'created_by' => lang('crud.created_by'),
                'updated_by' => lang('crud.updated_by'),
                'tugas_tim' => lang('crud.tugas_tim'),
                'target_nominal_tim' => lang('crud.target_nominal_tim')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager
        ];
    }


    protected function getDataTim($id=null)
    {
        $dataEdit = parent::getDataTim($id);
        $model = new TimStaffModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
            $dataEdit['timStaff'] = (new TimStaffModel())->where('id_tim', $id)->findAll();
        }
        return $dataEdit;
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new TimStaffModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
            $dataEdit['timStaff'] = (new TimStaffModel())->where('id_tim', $id)->findAll();
        }
        
        return $dataEdit;
    }
}
