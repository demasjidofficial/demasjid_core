<?php

namespace App\Modules\Settings\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SettingsModel;
use App\Modules\Settings\Models\SettingsFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class SettingsController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Settings\Views\settings\\';
    protected $baseRoute = ADMIN_AREA.'/settings/settings';
    protected $langModel = 'settings';
    protected $modelName = 'App\Modules\Api\Models\SettingsModel';
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
        $model = model(SettingsFilter::class);
        return [
            'headers' => [
                                    'class' => lang('crud.class'),
                'key' => lang('crud.key'),
                'value' => lang('crud.value'),
                'type' => lang('crud.type'),
                'context' => lang('crud.context')
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
        $model = new SettingsModel();

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
