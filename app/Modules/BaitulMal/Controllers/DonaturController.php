<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\DonaturModel;
use App\Modules\BaitulMal\Models\DonaturFilter;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TugasTimModel;
use App\Traits\UploadedFile;
class DonaturController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\donatur\\';
    protected $baseRoute = 'admin/baitulmal/donatur';
    protected $langModel = 'donatur';
    protected $modelName = 'App\Modules\Api\Models\DonaturModel';
    private $imageFolder = 'image_path';
    private $ttdFolder = 'signature_path';
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
        $image = $this->request->getPost('image_path');
        if (!empty($image)) {
            
                $uploadedImage = $this->uploadCamera('image_path');
                $this->model->set('path_image', $uploadedImage);
            
        }

        $signature_img = $this->request->getPost('signature_path');
        if (!empty($signature_img)) {
                $uploadedSign = $this->uploadTtd('signature_path');
                $this->model->set('path_signature', $uploadedSign);
            
        }


    
        $data = $this->request->getPost();
        $data['nominal'] = (float)(str_replace(',','',$data['nominal']));
        
      

        if (! $this->model->insert($data)) {            
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(DonaturFilter::class);
        return [
            'headers' => [
                                    'id_donatur_type' => lang('crud.id_donatur_type'),
                'donatur_type_id' => lang('crud.donatur_type_id'),
                'name' => lang('crud.name'),
                'email' => lang('crud.email'),
                'no_hp' => lang('crud.no_hp'),
                'alamat' => lang('crud.alamat'),
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
        $model = new DonaturModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['tugasItems'] = ['' => 'Pilih Tugas'] + Arr::pluck(model('App\Modules\Api\Models\TugasTimModel')->select(['tugas_tim.id as key', 'tugas_tim.tugas as text'])->asArray()->findAll(), 'text', 'key');
      
        return $dataEdit;
    }
}
