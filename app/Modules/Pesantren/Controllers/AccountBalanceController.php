<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\AccountBalanceModel;
use App\Modules\Api\Models\EntityModel;
use App\Modules\Pesantren\Models\AccountBalanceFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class AccountBalanceController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\account_balance\\';
    protected $baseRoute = 'admin/pesantren/accountbalance';
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
        $entities = $this->listPesantrenEntity();
        $model->whereIn('entity_id', $entities);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'account' => lang('crud.account'),
                'entity_id' => lang('crud.entity_id'),
                'created_by' => lang('crud.created_by')
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
            $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['entity.id as key','entity.name as text'])->pesantren()->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }    
}
