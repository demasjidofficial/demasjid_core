<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TimFundraisingModel;
use App\Modules\BaitulMal\Models\TimFundraisingFilter;

class TimFundraisingController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tim_fundraising\\';
    protected $baseRoute = 'admin/baitulmal/timfundraising';
    protected $langModel = 'tim_fundraising';
    protected $modelName = 'App\Modules\Api\Models\TimFundraisingModel';
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
        $model = model(TimFundraisingFilter::class);
        return [
            'headers' => [
                                    'id_target' => lang('crud.id_target'),
                'id_jadwal' => lang('crud.id_jadwal'),
                'supervisior' => lang('crud.supervisior'),
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
        }
        $dataEdit['targetItems'] = ['' => 'Pilih Target'] + Arr::pluck(model('App\Modules\Api\Models\TargetFundraisingListModel')->select(['id as key', 'campaign as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['jadwalItems'] = ['' => 'Pilih Jadwal'] + Arr::pluck(model('App\Modules\Api\Models\JadwalFundraisingModel')->select(['id as key', 'jadwal_durasi as text'])->asArray()->findAll(), 'text', 'key');
      
        
        return $dataEdit;
    }
}
