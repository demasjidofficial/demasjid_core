<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\DonasiModel;
use App\Modules\BaitulMal\Models\DonasiFilter;
use App\Modules\BaitulMal\Models\MasterBankFilter;
use App\Modules\BaitulMal\Models\MasterPaymentgatewayFilter;

class DonasiController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\donasi\\';
    protected $baseRoute = 'admin/baitulmal/donation';
    protected $langModel = 'donasi';
    protected $modelName = 'App\Modules\Api\Models\DonasiModel';
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
        $view = $this->viewPrefix . ($this->request->isAJAX() || $this->isHxRequest() ? '_table' : 'index');
        $dataIndex = $this->getDataCampaign($id);
        return $this->render($view , $dataIndex);
    }

    public function create(){
        return parent::create();
    }

    public function insertDonation(){
        $data = $this->request->getPost();
        if (! $this->model->insert($data)) {            
            return json_encode([
                'state' => false,
                'error' => $this->model->errors()
            ]);
        }
        $this->writeLog();
        return json_encode([
            'state' => true,
            'id' => $this->model->insertID()
        ]);
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(DonasiFilter::class);
        return [
            'headers' => [
                'donatur' => lang('crud.donatur'),
                'no_hp' => lang('crud.no_hp'),
                'donasi' => lang('crud.donation'),
                'program' => lang('crud.program'),
                'payment' => lang('crud.payment'),
                'followup' => '',
                'date' => lang('crud.date'),
                'action' => lang('crud.action')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
            'dataStats' => $this->getDataStats($model->find()),
            'campaignName' => 'All'
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new DonasiModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['campaignItems'] = ['' => 'Pilih Kampanye'] + Arr::pluck(model('App\Modules\Api\Models\BmdonationcampaignModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['donaturItems'] = ['' => 'Pilih Donatur'] + Arr::pluck(model('App\Modules\Api\Models\DonaturModel')->select(['id as key', 'no_hp as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['paymentMethodItems'] = ['' => 'Pilih Payment Method'] + Arr::pluck(model('App\Modules\Api\Models\PaymentMethodModel')->select(['id as key', 'rek_no as int'])->asArray()->findAll(), 'int', 'key');
        return $dataEdit;
    }

    protected function getDataCampaign($id)
    {
        $model = model(DonasiFilter::class);
        $model->where('campaign_id', (int)$id);
        $uri = current_url(true);

        $model_master_bank = model(MasterBankFilter::class)->asArray()->findAll();
        $model_master_paygat = model(MasterPaymentgatewayFilter::class)->asArray()->findAll();

        return [
            'headers' => [
                'donatur' => lang('crud.donatur'),
                'no_hp' => lang('crud.no_hp'),
                'donasi' => lang('crud.donation'),
                'program' => lang('crud.program'),
                'payment' => lang('crud.payment'),
                'followup' => '',
                'date' => lang('crud.date'),
                'action' => lang('crud.action')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
            'dataStats' => $this->getDataStats($model->find()),
            'campaignName' => urldecode($uri->getSegment(5)),
            'master_bank' => $model_master_bank,
            'master_paygat' => $model_master_paygat
        ];
    }

    protected function getDataStats($data) {
        $totalDonation = 0;
        $totalActiveCampaign = 0;
        $countDonation = 0;
        return (object)[
            'totalDonation' => $totalDonation,
            'totalActiveCampaign' => $totalActiveCampaign,
            'countDonation' => $countDonation,
            'totalCampaign' => count($data),
        ];
    }
       
}
