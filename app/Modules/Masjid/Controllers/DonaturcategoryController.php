<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\DonaturcategoryModel;
use App\Modules\Masjid\Models\DonaturcategoryFilter;

class DonaturcategoryController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\donaturcategory\\';
    protected $baseRoute = 'admin/masjid/donaturcategory';
    protected $langModel = 'donaturcategory';
    protected $modelName = 'App\Modules\Api\Models\DonaturcategoryModel';
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
        $model = model(DonaturcategoryFilter::class);
        return [
            'headers' => [
                                    'name' => 'name',
                'label' => 'label',
                'path_image' => 'path_image',
                'description' => 'description',
                'created_by' => 'created_by',
                'updated_by' => 'updated_by'
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
        $model = new DonaturcategoryModel();

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
