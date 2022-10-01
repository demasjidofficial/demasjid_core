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
    public function index()
    {
        return parent::index();
    }

    public function edit($id = null)
    {
        return parent::edit($id);
    }

    public function update($id = null)
    {

        $data = $this->request->getPost();
        $image = $data['image_path'];
        $signature_img = $data['signature_path'];
        $signature_img = $this->request->getFile('signature_img');
        $image_path = $this->request->getFile('campaign_imgpreview');

        if (!empty($signature_img)) {
            if ($signature_img->getSize() > 0) {
                $uploadedSign = $this->uploadFile('signature_path');
                $this->model->set('path_signature', $uploadedSign);
            }
        } else {
            if (!empty($image)) {

                $uploadedImage = $this->uploadCamera('image_path');
                $this->model->set('path_image', $uploadedImage);
                $data['path_image'] = $uploadedImage;
            }
        }

        if (!empty($image_path)) {
            if ($image_path->getSize() > 0) {
                $uploadedImage = $this->uploadCamera('image_path');
                $this->model->set('path_image', $uploadedImage);
            }
        } else {
            if (!empty($signature_img)) {
                $uploadedSign = $this->uploadTtd('signature_path');
                $this->model->set('path_signature', $uploadedSign);
                $data['path_signature'] = $uploadedSign;
            }
        }
        $data['nominal'] = (float)(str_replace(',', '', $data['nominal']));
        $updateData = array_filter($data);
        if (!$this->model->update($id, $updateData)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $image = $data['image_path'];
        if (!empty($image)) {

            $uploadedImage = $this->uploadCamera('image_path');
            $this->model->set('path_image', $uploadedImage);
            $data['path_image'] = $uploadedImage;
        }

        $signature_img = $data['signature_path'];
        if (!empty($signature_img)) {
            $uploadedSign = $this->uploadTtd('signature_path');
            $this->model->set('path_signature', $uploadedSign);
            $data['path_signature'] = $uploadedSign;
        }




        $data['nominal'] = (float)(str_replace(',', '', $data['nominal']));



        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(DonaturFilter::class);
        return [
            'headers' => [
                'tugas' => lang('crud.tugas'),
                'tgl_transaksi' => lang('crud.tgl_transaksi'),
                'name' => lang('crud.name'),
                'no_hp' => lang('crud.no_hp'),
                'alamat' => lang('crud.alamat'),
                'nominal' => lang('crud.nominal'),
                'nominal_target' => lang('crud.nominal_target'),
                'tim_nama' => lang('crud.nama_tim'),
                'petugas' => lang('crud.petugas')
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

        if (!empty($id)) {
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
