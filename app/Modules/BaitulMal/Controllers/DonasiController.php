<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\DonasiModel;
use App\Modules\BaitulMal\Models\DonasiFilter;

class DonasiController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\donasi\\';
    protected $baseRoute = 'admin/baitulmal/donasis';
    protected $langModel = 'donasi';
    protected $modelName = 'App\Modules\Api\Models\DonasiModel';
    public function index(){
        return parent::index();
        //return $this->render('App\Modules\BaitulMal\Views\donasis\donasis',[]);
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
        $model = model(DonasiFilter::class);
        return [
            'headers' => [
                'no' => lang('crud.no'),
                'donatur' => lang('crud.id_donatur'),
                'no_hp' => lang('crud.no_hp'),
                'donasi' => lang('crud.donation'),
                'program' => lang('crud.program'),
                'payment' => lang('crud.payment'),
                'date' => lang('crud.date'),
                'action' => lang('crud.created_by')
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
        $model = new DonasiModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['donaturItems'] = ['' => 'Pilih Donatur'];
        return $dataEdit;
    }
}
