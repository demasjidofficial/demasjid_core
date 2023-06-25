<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\ImamModel;
use App\Modules\Masjid\Models\ImamFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class ImamController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\imam\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/imam';
    protected $langModel = 'imam';
    protected $modelName = 'App\Modules\Api\Models\ImamModel';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        $data = $this->request->getPost();
        if(!isset($data['is_khotib'])){
            $this->model->set('is_khotib', 0);
        }
        if(!isset($data['is_permanent'])){
            $this->model->set('is_permanent', 0);
        }
        
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        $data = $this->request->getPost();
        if(!isset($data['is_khotib'])){
            $this->model->set('is_khotib', 0);
        }
        if(!isset($data['is_permanent'])){
            $this->model->set('is_permanent', 0);
        }
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(ImamFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'contact' => lang('crud.contact'),
                'address' => lang('crud.address'),
                'description' => lang('crud.description'),
                'is_permanent' => lang('crud.is_permanent'),
                'is_khotib' => lang('crud.is_khotib'),
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
        $model = new ImamModel();

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
