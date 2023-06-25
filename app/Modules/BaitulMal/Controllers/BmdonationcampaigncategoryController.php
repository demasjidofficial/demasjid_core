<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BmdonationcampaigncategoryModel;
use App\Modules\BaitulMal\Models\BmdonationcampaigncategoryFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class BmdonationcampaigncategoryController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\bmdonationcampaigncategory\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/donationcampaigncategory';
    protected $langModel = 'bmdonationcampaigncategory';
    protected $modelName = 'App\Modules\Api\Models\BmdonationcampaigncategoryModel';
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
        $model = model(BmdonationcampaigncategoryFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'label' => lang('crud.label'),
                'description' => lang('crud.description')
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
        $model = new BmdonationcampaigncategoryModel();

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
