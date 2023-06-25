<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\CampaignsModel;
use App\Modules\BaitulMal\Models\CampaignsFilter;

class CampaignsController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\campaigns\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/campaigns';
    protected $langModel = 'campaigns';
    protected $modelName = 'App\Modules\Api\Models\CampaignsModel';
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
        $model = model(CampaignsFilter::class);
        return [
            'headers' => [
                'id_program' => lang('crud.programs'),
                'status' => lang('crud.status'),
                'is_active' => lang('crud.is_active'),
                'is_delete' => lang('crud.is_delete'),
                'created_by' => lang('crud.created_by'),
                'create_date' => lang('crud.create_date'),
                'modified_by' => lang('crud.modified_by'),
                'modified_date' => lang('crud.modified_date')
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
        $model = new CampaignsModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['programItems'] = Arr::pluck(model('App\Modules\Api\Models\ProgramModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
