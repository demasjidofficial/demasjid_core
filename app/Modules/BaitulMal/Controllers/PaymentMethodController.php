<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\PaymentMethodModel;
use App\Modules\BaitulMal\Models\PaymentMethodFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class PaymentMethodController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\payment_method\\';
    protected $baseRoute = 'admin/baitulmal/paymentmethod';
    protected $langModel = 'payment_method';
    protected $modelName = 'App\Modules\Api\Models\PaymentMethodModel';
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
        $model = model(PaymentMethodFilter::class);
        return [
            'headers' => [
                'master_payment_id' => lang('crud.master_payment_id'),
                'rek_no' => lang('crud.rek_no'),
                'rek_name' => lang('crud.rek_name'),
                'payment_category_id' => lang('crud.payment_category_id'),
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
        $model = new PaymentMethodModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['bankItems'] = ['' => 'Pilih Bank'] + Arr::pluck(model('App\Modules\Api\Models\MasterBankModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
            $dataEdit['payment_categoryItems'] = ['' => 'Pilih Categori'] + Arr::pluck(model('App\Modules\Api\Models\PaymentCategoryModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}
