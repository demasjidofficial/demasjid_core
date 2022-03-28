<?php

namespace App\Modules\TPQ\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\ChartOfAccountModel;
use App\Modules\TPQ\Models\ChartOfAccountFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class ChartOfAccountController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\TPQ\Views\chart_of_account\\';
    protected $baseRoute = 'admin/tpq/chartofaccount';
    protected $langModel = 'chart_of_account';
    protected $modelName = 'App\Modules\Api\Models\ChartOfAccountModel';
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
        $model = model(ChartOfAccountFilter::class);
        $model->tpq();
        return [
            'headers' => [
                                    'code' => lang('crud.code'),
                'name' => lang('crud.name'),
                'group_account' => lang('crud.group_account'),
                'entity_id' => lang('crud.entity_id')                
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
        $model = new ChartOfAccountModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['id as key','name as text'])->tpq()->asArray()->findAllExcludeJoin(), 'text', 'key');
            $dataEdit['groupAccountItems'] = ChartOfAccountModel::groupAccountList();
        return $dataEdit;
    }
}