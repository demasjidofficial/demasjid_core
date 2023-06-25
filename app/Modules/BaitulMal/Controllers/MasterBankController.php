<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\MasterBankModel;
use App\Modules\BaitulMal\Models\MasterBankFilter;
use App\Traits\UploadedFile;

class MasterBankController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\master_bank\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/masterbank';
    protected $langModel = 'master_bank';
    protected $modelName = 'App\Modules\Api\Models\MasterBankModel';
    private $imageFolder = 'images';
    
    public function index(){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_logo', $uploaded);
            }
        }
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_logo', $uploaded);
            }
        }
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_logo', $uploaded);
            }
        }

        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(MasterBankFilter::class);
        return [
            'headers' => [
                'logo' => lang('crud.logo'),
                'name' => lang('crud.bank'),
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
        $model = new MasterBankModel();

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
