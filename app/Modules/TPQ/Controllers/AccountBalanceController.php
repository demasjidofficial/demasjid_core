<?php

namespace App\Modules\TPQ\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\AccountBalanceModel;
use App\Modules\TPQ\Models\AccountBalanceFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class AccountBalanceController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\TPQ\Views\account_balance\\';
    protected $baseRoute = 'admin/tpq/accountbalance';
    protected $langModel = 'account_balance';
    protected $modelName = 'App\Modules\Api\Models\AccountBalanceModel';
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
        $model = model(AccountBalanceFilter::class);
        return [
            'headers' => [
                                    'name' => 'name',
                'account' => 'account',
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
        $model = new AccountBalanceModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
