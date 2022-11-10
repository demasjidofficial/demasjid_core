<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\DonaturModel;
use App\Modules\BaitulMal\Models\DonaturFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class DonaturController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\donatur\\';
    protected $baseRoute = 'admin/baitulmal/donatur';
    protected $langModel = 'donatur';
    protected $modelName = 'App\Modules\Api\Models\DonaturModel';
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
        $model = model(DonaturFilter::class);
        return [
            'headers' => [
                'donatur_type_id' => lang('crud.donatur_type_id'),
                'name' => lang('crud.name'),
                'email' => lang('crud.email'),
                'no_hp' => lang('crud.no_hp'),
                'alamat' => lang('crud.alamat')
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
        $model = new DonaturModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['donaturTypeItems'] = Arr::pluck(model('App\Modules\Api\Models\DonaturTypeModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}