<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TargetFundraisingModel;
use App\Modules\BaitulMal\Models\TargetFundraisingFilter;

class TargetFundraisingController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\target_fundraising\\';
    protected $baseRoute = 'admin/baitulmal/targetfundraising';
    protected $langModel = 'target_fundraising';
    protected $modelName = 'App\Modules\Api\Models\TargetFundraisingModel';
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
        $model = model(TargetFundraisingFilter::class);
        return [
            'headers' => [
                                    'campaign' => lang('crud.campaign'),
                'donatur' => lang('crud.donatur'),
                'target_nominal' => lang('crud.target_nominal'),
                'tipe_donasi' => lang('crud.tipe_donasi')
               
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
        $model = new TargetFundraisingModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $data->jadwal_mulai = $data->start_date.' - '.$data->end_date;
            $dataEdit['data'] = $data;
        }
       
        $dataEdit['donationtypeItems'] = ['' => 'Pilih Tipe'] + Arr::pluck(model('App\Modules\Api\Models\BmdonationtypeModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['tipedonatur'] = ['' => 'Pilih Kategori Donatur'] + Arr::pluck(model('App\Modules\Api\Models\DonaturCategoryModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
      
        return $dataEdit;
    }
}
