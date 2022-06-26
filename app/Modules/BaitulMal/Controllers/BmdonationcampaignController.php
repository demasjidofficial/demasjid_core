<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\BaitulMal\Models\BmdonationcampaignFilter;
use App\Traits\UploadedFile;
use IlluminateAgnostic\Arr\Support\Arr;

class BmdonationcampaignController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\bmdonationcampaign\\';
    protected $baseRoute = 'admin/baitulmal/donationcampaign';
    protected $langModel = 'bmdonationcampaign';
    protected $modelName = 'App\Modules\Api\Models\BmdonationcampaignModel';
    private $imageFolder = 'images';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){

        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

        $data = $this->request->getPost();
        
        $datarange = explode(' - ', $data['campaign_daterange']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['campaignend_date'] = date("Y-m-d", strtotime(($end_date[2].'-'.$end_date[1].'-'.$end_date[0])));
        $data['campaignstart_date'] = date("Y-m-d", strtotime(($start_date[2].'-'.$start_date[1].'-'.$start_date[0])));
        unset($data['campaign_daterange']);

        $updateData = array_filter($data);
        
        if (! $this->model->update($id, $updateData)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null){
        return parent::show($id);
    }  

    public function create(){
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('path_image', $uploadedImage);

        $data = $this->request->getPost();
        
        $datarange = explode(' - ', $data['campaign_daterange']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['campaignend_date'] = date("Y-m-d", strtotime(($end_date[2].'-'.$end_date[1].'-'.$end_date[0])));
        $data['campaignstart_date'] = date("Y-m-d", strtotime(($start_date[2].'-'.$start_date[1].'-'.$start_date[0])));
        unset($data['campaign_daterange']);

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
        $model = model(BmdonationcampaignFilter::class);
        return [
            'headers' => [
                'path_image' => lang('crud.path_image'),
                'name' => lang('crud.name'),
                'campaign_tonase' => lang('crud.campaign_tonase'),
                'campaign_collected' => lang('crud.campaign_collected'),
                'campaignend_date' => lang('crud.campaignend_date'),
                'state' => lang('crud.state'),
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
        $model = new BmdonationcampaignModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $start_date = explode('-', $data->campaignstart_date);
            $end_date = explode('-', $data->campaignend_date);
            $data->campaign_daterange =  $start_date[2] . '/' . $start_date[1] .'/'. (substr($start_date[0], 2)) . ' - ' . $end_date[2] . '/' . $end_date[1] . '/' . (substr($end_date[0], 2)); 
            $dataEdit['data'] = $data;
        }
        
        return $dataEdit;
    }
}
