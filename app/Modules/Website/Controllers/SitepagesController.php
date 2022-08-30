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
    protected $baseRoute = 'admin/website/pages';
    protected $langModel = 'sitepages';
    protected $modelName = 'App\Modules\Api\Models\SitepagesModel';
    protected $LANGUAGE_LISTS = [ '', 'Indonesia', 'Arab', 'English' ];
    
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
        $data = $this->request->getPost();
        // default to language_id = 1 / indonesia
        $data['language_id'] = 1;

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
        $model = model(SitepagesFilter::class);
        return [
            'headers' => [
                'title' => lang('crud.title'),
                //'subtitle' => lang('crud.subtitle'),
                'permalink' => lang('crud.permalink'),
                'sitemenu_id' => lang('crud.menu'),
                'language_id' => lang('crud.language'),
                'state' => lang('crud.state'),
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
            'language_lists' => $this->LANGUAGE_LISTS,
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
        $dataEdit['menuItems'] = Arr::pluck(model('App\Modules\Api\Models\SitemenusModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');

        return $dataEdit;
    }
}
