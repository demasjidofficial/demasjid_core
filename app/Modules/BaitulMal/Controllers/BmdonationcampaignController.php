<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\BaitulMal\Models\BmdonationcampaignFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class BmdonationcampaignController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\bmdonationcampaign\\';
    protected $baseRoute = 'admin/baitulmal/donationcampaign';
    protected $langModel = 'bmdonationcampaign';
    protected $modelName = 'App\Modules\Api\Models\BmdonationcampaignModel';
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
        $model = model(BmdonationcampaignFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'label' => lang('crud.label'),
                'path_image' => lang('crud.path_image'),
                'description' => lang('crud.description'),
                'campaignstart_date' => lang('crud.campaignstart_date'),
                'campaignend_date' => lang('crud.campaignend_date'),
                'campaign_tonase' => lang('crud.campaign_tonase'),
                'campaigncategory_id' => lang('crud.campaigncategory_id'),
                'donationtype_id' => lang('crud.donationtype_id'),
                'state' => lang('crud.state'),
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
        $model = new BmdonationcampaignModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        
        return $dataEdit;
    }
}
