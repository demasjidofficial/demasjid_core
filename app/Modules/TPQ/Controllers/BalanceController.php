<?php

namespace App\Modules\TPQ\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BalanceModel;
use App\Modules\TPQ\Models\BalanceFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class BalanceController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\TPQ\Views\balance\\';
    protected $baseRoute = 'admin/tpq/balance';
    protected $langModel = 'balance';
    protected $modelName = 'App\Modules\Api\Models\BalanceModel';
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
        $model = model(BalanceFilter::class);
        return [
            'headers' => [
                                    'account_balance_id' => 'account_balance_id',
                'name' => 'name',
                'description' => 'description',
                'debit' => 'debit',
                'credit' => 'credit',
                'amount' => 'amount',
                'transaction_date' => 'transaction_date',
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
        $model = new BalanceModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['account_balanceItems'] = Arr::pluck(model('App\Modules\Api\Models\AccountBalanceModel')->select(['account_balance.id as key','account_balance.name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
