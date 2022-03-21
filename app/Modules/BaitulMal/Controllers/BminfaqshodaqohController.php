<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BminfaqshodaqohModel;
use App\Modules\BaitulMal\Models\BminfaqshodaqohFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class BminfaqshodaqohController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\bminfaqshodaqoh\\';
    protected $baseRoute = 'admin/baitulmal/bminfaqshodaqoh';
    protected $langModel = 'bminfaqshodaqoh';
    protected $modelName = 'App\Modules\Api\Models\BminfaqshodaqohModel';
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
        $model = model(BminfaqshodaqohFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'label' => lang('crud.label'),
                'needed_funds' => lang('crud.needed_funds'),
                'collected_funds' => lang('crud.collected_funds'),
                'path_image' => lang('crud.path_image'),
                'description' => lang('crud.description'),
                'program_id' => lang('crud.program_id'),
                'category_id' => lang('crud.category_id'),
                'donationtype_id' => lang('crud.donationtype_id'),
                'state' => lang('crud.state'),
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
        $model = new BminfaqshodaqohModel();

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
