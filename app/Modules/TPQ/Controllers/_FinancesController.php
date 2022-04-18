<?php

namespace App\Modules\TPQ\Controllers;

use App\Controllers\AdminCrudController;
//use App\Modules\Api\Models\FinancesModel;
//use App\Modules\TPQ\Models\FinancesFilter;
//use IlluminateAgnostic\Arr\Support\Arr;

class _FinancesController extends AdminCrudController
{
    //protected $baseController = __CLASS__;
    //protected $viewPrefix = 'App\Modules\TPQ\Views\submodules\\';
    //protected $baseRoute = 'admin/masjid/';
    //protected $langModel = 'accounting';
    //protected $modelName = 'App\Modules\Api\Models\FinancesModel';
    public function index(){
        //return parent::index();
        return $this->render('App\Modules\TPQ\Views\_submodules\finances',[]);
    }

    /*
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
    */

    /*
    protected function getDataIndex()
    {
        
        $model = model(FinancesFilter::class);
        $model->masjid();
        $model->orderBy('transaction_date');
        return [
            'headers' => [                
                'transaction_date' => lang('crud.transaction_date'),
                'description' => lang('crud.description'),
                'debit' => lang('crud.debit'),
                'credit' => lang('crud.credit'),                
                'saldo'  => lang('crud.saldo'),
                'chart_of_account_id' => lang('crud.chart_of_account'),
                'account_balance_id' => lang('crud.account'),
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
        /*
        $dataEdit = parent::getDataEdit($id);
        $model = new FinancesModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['account_balanceItems'] = Arr::pluck(model('App\Modules\Api\Models\AccountFinancesModel')->select(['account_balance.id as key', 'account_balance.name as text'])->masjid()->asArray()->findAllExcludeJoin(), 'text', 'key');
            $dataEdit['chart_of_accountItems'] = Arr::pluck(model('App\Modules\Api\Models\ChartOfAccountModel')->select(['id as key','name as text'])->masjid()->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
        
    }
    */
}