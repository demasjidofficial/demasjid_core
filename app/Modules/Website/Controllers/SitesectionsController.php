<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitesectionsModel;
use App\Modules\Website\Models\SitesectionsFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class SitesectionsController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitesections\\';
    protected $baseRoute = 'admin/website/sections';
    protected $langModel = 'sitesections';
    protected $modelName = 'App\Modules\Api\Models\SitesectionsModel';
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
        $model = model(SitesectionsFilter::class);
        return [
            'headers' => [
                                    'title' => 'title',
                'subtitle' => 'subtitle',
                'content' => 'content',
                'sequence' => 'sequence',
                'sitepage_id' => 'sitepage_id',
                'state' => 'state',
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
        $model = new SitesectionsModel();

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
