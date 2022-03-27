<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitepagesModel;
use App\Modules\Website\Models\SitepagesFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class SitepagesController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitepages\\';
    protected $baseRoute = 'admin/website/sitepages';
    protected $langModel = 'sitepages';
    protected $modelName = 'App\Modules\Api\Models\SitepagesModel';
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
        $model = model(SitepagesFilter::class);
        return [
            'headers' => [
                'path_image' => lang('crud.image'),
                'title' => lang('crud.title'),
                //'subtitle' => lang('crud.subtitle'),
                //'content' => lang('crud.content'),
                //'permalink' => lang('crud.permalink'),
                //'meta_title' => lang('crud.meta_title'),
                //'meta_desc' => lang('crud.meta_desc'),
                'sitemenu_id' => lang('crud.menu'),
                'language_id' => lang('crud.language'),
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
        $model = new SitepagesModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        //$menuItems = Arr::pluck(model('App\Modules\Api\Models\SitemenusModel')->select(['menu.id as key','menu.name as text'])->website()->asArray()->findAllExcludeJoin(), 'text', 'key');

        $dataEdit['menuItems'] = Arr::pluck(model('App\Modules\Api\Models\SitemenusModel')->select(['id as key','label as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');

        return $dataEdit;
    }
}
