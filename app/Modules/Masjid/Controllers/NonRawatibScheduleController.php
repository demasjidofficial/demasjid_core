<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\NonRawatibScheduleModel;
use App\Modules\Masjid\Models\NonRawatibScheduleFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class NonRawatibScheduleController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\schedule\non_rawatib_schedule\\';
    protected $baseRoute = 'admin/masjid/nonrawatibschedule';
    protected $langModel = 'non_rawatib_schedule';
    protected $modelName = 'App\Modules\Api\Models\NonRawatibScheduleModel';
    protected $typeSholat = '';
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
        $model = model(NonRawatibScheduleFilter::class);
        $model->where('type_sholat', $this->typeSholat);
        return [
            'headers' => [                
                'name' => lang('crud.name'),
                'pray_date' => lang('crud.pray_date'),
                'imam_id' => lang('crud.imam_id'),
                'khotib_id' => lang('crud.khotib_id')                
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'type'      => $this->typeSholat,
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new NonRawatibScheduleModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['imamItems'] = Arr::pluck(model('App\Modules\Api\Models\ImamModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
            $dataEdit['khotibItems'] = Arr::pluck(model('App\Modules\Api\Models\ImamModel')->select(['id as key','name as text'])->khotib()->asArray()->findAll(), 'text', 'key');
            $dataEdit['sholatItems'] = $model->getListSholat();
            $dataEdit['type'] = $this->typeSholat;
        return $dataEdit;
    }
}
