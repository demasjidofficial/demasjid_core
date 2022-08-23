<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Entities\TimStaff;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TimFundraisingModel;
use App\Modules\Api\Models\TimStaffModel;
use App\Modules\BaitulMal\Models\TimFundraisingFilter;

class TimFundraisingController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tim_fundraising\\';
    protected $baseRoute = 'admin/baitulmal/timfundraising';
    protected $langModel = 'tim_fundraising';
    protected $modelName = 'App\Modules\Api\Models\TimFundraisingModel';
    public function index($id = null){
        return parent::index($id);
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
        $model = model(TimFundraisingFilter::class);
     
        return [
            'headers' => [
                                    'target_id' => lang('crud.target_id'),
        
           
              
                'jadwal_mulai' => lang('crud.durasi'),
                'staff' => lang('crud.staff'),

       
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
        $model = new TimFundraisingModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
            $dataEdit['timStaff'] = (new TimStaffModel())->where('id_tim', $id)->findAll();
        }
        $dataEdit['targetItems'] = ['' => 'Pilih Target'] + Arr::pluck(model('App\Modules\Api\Models\TargetFundraisingListModel')->select(['id as key', 'campaign_name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['supervisorItems'] = ['' => 'Pilih Supervisior'] + Arr::pluck(model('App\Modules\Api\Models\UsersModel')->select(['id as key', 'username as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['staffItems'] = ['' => 'Pilih Staff'] +Arr::pluck(model('App\Modules\Api\Models\UsersModel')->select(['id as key', 'username as text'])->asArray()->findAll(), 'text', 'key');
        
        return $dataEdit;
    }

    protected function getDataTim($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new TimFundraisingModel();

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
