<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\PaymentMethodPaygatModel;
use App\Modules\BaitulMal\Models\PaymentMethodPaygatFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class PaymentMethodPaygatController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\payment_method_paygat\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/paymentmethod_paygat';
    protected $langModel = 'payment_method';
    protected $modelName = 'App\Modules\Api\Models\PaymentMethodModel';
    public function index()
    {
        return parent::index();
    }

    public function edit($id = null)
    {
        return parent::edit($id);
    }

    public function update($id = null)
    {
        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        /** Auto fill for transfer */
        $this->model->set('payment_category_id', (new PaymentMethodPaygatModel())->paymentGateway());

        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(PaymentMethodPaygatFilter::class);
        return [
            'headers' => [
                'payment_category_id' => '',
                'master_payment_id' => lang('crud.paymentgateway'),
                'rek_no' => lang('crud.rek_no'),
                'rek_name' => lang('crud.rek_name'),
                'isActived' => lang('crud.state')
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
        $model = new PaymentMethodPaygatModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['bankItems'] = ['' => 'Pilih Payment Gateway'] + Arr::pluck(model('App\Modules\Api\Models\MasterPaymentgatewayModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}
