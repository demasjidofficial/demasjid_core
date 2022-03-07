<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitepostsModel;
use App\Modules\Website\Models\SitepostsFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class SitepostsController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\siteposts\\';
    protected $baseRoute = 'admin/website/siteposts';
    protected $langModel = 'siteposts';
    protected $modelName = 'App\Modules\Api\Models\SitepostsModel';
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
        $model = model(SitepostsFilter::class);
        return [
            'headers' => [
                                    'title' => 'title',
                'subtitle' => 'subtitle',
                'path_image' => 'path_image',
                'content' => 'content',
                'permalink' => 'permalink',
                'meta_title' => 'meta_title',
                'meta_desc' => 'meta_desc',
                'labels' => 'labels',
                'language_id' => 'language_id',
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
        $model = new SitepostsModel();

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
