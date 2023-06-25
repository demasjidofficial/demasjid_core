<?php

namespace App\Modules\Settings\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\LanguagesModel;
use App\Modules\Settings\Models\LanguagesFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class LanguagesController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Settings\Views\languages\\';
    protected $baseRoute = ADMIN_AREA.'/settings/languages';
    protected $langModel = 'languages';
    protected $modelName = 'App\Modules\Api\Models\LanguagesModel';
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
        $model = model(LanguagesFilter::class);
        return [
            'headers' => [
                'code' => lang('crud.code'),
                'name' => lang('crud.name'),
                'path_icon' => lang('crud.path_icon'),
                'state' => lang('crud.state'),
                //'created_by' => lang('crud.created_by')
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
        $model = new LanguagesModel();

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
