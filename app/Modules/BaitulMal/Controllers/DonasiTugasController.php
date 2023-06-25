<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\DonasiModel;
use App\Modules\BaitulMal\Models\DonasiFilter;
use App\Modules\Api\Models\TugasTimModel;
use App\Traits\UploadedFile;
use App\Modules\BaitulMal\Models\BmdonationcampaignFilter;

class DonasiTugasController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\donasi_tugas\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/donation_tugas';
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
        $image = $this->request->getFile('image');
        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploadedImage = $this->uploadFile('image');
                $this->model->set('path_image', $uploadedImage);
            }
        }

        $signature_img = $this->request->getFile('signature_img');
        if (!empty($signature_img)) {
            if ($signature_img->getSize() > 0) {
                $uploadedSign = $this->uploadFile('signature_img');
                $this->model->set('path_signature', $uploadedSign);
            }
        }

    
        $data = $this->request->getPost();
        $data['target_nominal'] = (float)(str_replace(',','',$data['target_nominal']));
        
        $tgl_transaksi = explode('/',$data['tgl_transaksi']);
     
        $data['tgl_transaksi'] = date("Y-m-d", strtotime(($tgl_transaksi[2].'-'.$tgl_transaksi[1].'-'.$tgl_transaksi[0])));
      
        unset($data['tgl_transaksi']);

        if (! $this->model->insert($data)) {            
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
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
            'dataStats' => $this->getDataStats($model->find(), null),
            'campaignName' => 'All',
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

        $dataEdit['tugasItems'] = ['' => 'Pilih Tugas'] + Arr::pluck(model('App\Modules\Api\Models\TugasTimModel')->select(['tugas_tim.id as key', 'tugas_tim.tugas as text'])->asArray()->findAll(), 'text', 'key');
      
        return $dataEdit;
    }

    protected function getDataCampaign($id)
    {
        $model = model(DonasiFilter::class);
        $model->where('campaign_id', (int)$id);
        $uri = current_url(true);

        $campaign = model(BmdonationcampaignFilter::class)->asArray()->find($id);
        
        $data = $model->paginate(setting('App.perPage'));

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
            'data' => $data,
            'pager' => $model->pager,
            'dataStats' => $this->getDataStats($data, $campaign),
            'campaignName' => urldecode($uri->getSegment(5)),
        ];
    }

    protected function getDataStats($donasi, $campaign) {
        $totalDonation = 0;
        $totalActiveCampaign = 0;
        $countDonation = 0;

        if (isset($campaign)) {
            $totalDonation = $campaign['campaign_collected'];
            $countDonation = $campaign['donation_count'];
            $totalActiveCampaign = ($campaign['state'] == model('App\Modules\Api\Models\BmdonationcampaignModel')::END) ? 0 : 1;
        }
        
        return (object)[
            'totalDonation' => $totalDonation,
            'totalActiveCampaign' => $totalActiveCampaign,
            'countDonation' => $countDonation,
            'totalInDonation' => count($donasi),
        ];
    }
       
}
