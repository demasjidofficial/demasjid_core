<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\NonRawatibScheduleCloneModel;
use App\Modules\Masjid\Models\NonRawatibScheduleCloneFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class NonRawatibScheduleCloneController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\non_rawatib_schedule_clone\\';
    protected $baseRoute = 'admin/masjid/nonrawatibscheduleclone';
    protected $langModel = 'non_rawatib_schedule_clone';
    protected $modelName = 'App\Modules\Api\Models\NonRawatibScheduleCloneModel';
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
        $model = model(NonRawatibScheduleCloneFilter::class);
        return [
            'headers' => [
                'type_sholat' => lang('crud.type_sholat'),
                'name' => lang('crud.name'),
                'pray_date' => lang('crud.pray_date'),
                'imam_id' => lang('crud.imam_id'),
                'khotib_id' => lang('crud.khotib_id'),
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
        $model = new NonRawatibScheduleCloneModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['imamItems'] = Arr::pluck(model('App\Modules\Api\Models\ImamModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
            $dataEdit['imamItems'] = Arr::pluck(model('App\Modules\Api\Models\ImamModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
