<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitemenusModel;
use App\Modules\Website\Models\SitemenusFilter;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\LanguagesModel;

class SitemenusController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitemenus\\';
    protected $baseRoute = 'admin/website/sitemenus';
    protected $langModel = 'sitemenus';
    protected $modelName = 'App\Modules\Api\Models\SitemenusModel';
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
        $model = model(SitemenusFilter::class);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'label' => lang('crud.label'),
                'parent' => lang('crud.parent'),
                'language_id' => lang('crud.language'),
                'state' => lang('crud.state'),
                //'created_by' => 'created_by'
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
        $model = new SitemenusModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['sitemenusItems'] = Arr::pluck(model('App\Modules\Api\Models\SitemenusModel')->select(['id as key','label as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');

        //$dataEdit['languagesItems'] = Arr::pluck(model('App\Modules\Api\Models\LanguagesModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');

        $dataEdit['languagesItems'] = [
            //NULL => 'Pilih bahasa',
            2 => 'Indonesia',
            3 => 'Arabic',
            4 => 'English',
        ];

        $dataEdit['statesItems'] = [
            //NULL => 'Pilih status',
            'draft' => 'Draft',
            'release' => 'Rilis',
        ];
        
        return $dataEdit;
    }
}
