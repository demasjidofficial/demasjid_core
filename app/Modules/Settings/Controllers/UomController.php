<?php

namespace App\Modules\Settings\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\UomModel;
use App\Modules\Settings\Models\UomFilter;

class UomController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Settings\Views\uom\\';
    protected $baseRoute = ADMIN_AREA.'/settings/uom';
    protected $langModel = 'uom';
    protected $modelName = 'App\Modules\Api\Models\UomModel';
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
        $model = model(UomFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'code' => lang('crud.code'),
                'type' => lang('crud.type'),
                'ratio' => lang('crud.ratio'),
                'uomcategory_id' => lang('crud.uom_category'),
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
        $model = new UomModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        
            // $dataEdit['uom_categoryItems'] = ['1' => 'Jam', '2' => 'Hari'];
            $dataEdit['uom_categoryItems'] = Arr::pluck(model('App\Modules\Api\Models\UomCategoryModel')->select(['uom_category.id as key','uom_category.name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
            
        return $dataEdit;
    }
}
