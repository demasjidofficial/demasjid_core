<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PendaftaranModel;
use App\Modules\Pesantren\Models\PendaftaranFilter;
use App\Traits\UploadedFile;

class PendaftaranController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\pendaftaran\\';
    protected $baseRoute = 'admin/pesantren/pendaftaran';
    protected $langModel = 'pendaftaran';
    protected $modelName = 'App\Modules\Api\Models\PendaftaranModel';
    private $imageFolder = 'images';

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
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('path_image', $uploadedImage);

        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(PendaftaranFilter::class);
        return [
            'headers' => [
                'class_id' => lang('crud.class_id'),
                'state' => lang('crud.state'),
                'name' => lang('crud.name'),
                'nis' => lang('crud.nis'),
                'nick_name' => lang('crud.nick_name'),
                'birth_date' => lang('crud.birth_date'),
                'birth_place' => lang('crud.birth_place'),
                'gender' => lang('crud.gender'),
                'provinsi_id' => lang('crud.provinsi_id'),
                'kota_id' => lang('crud.kota_id'),
                'kecamatan_id' => lang('crud.kecamatan_id'),
                'desa_id' => lang('crud.desa_id'),
                'address' => lang('crud.address'),
                'school_origin' => lang('crud.school_origin'),
                'description' => lang('crud.description'),
                'father_name' => lang('crud.father_name'),
                'father_job' => lang('crud.father_job'),
                'father_tlpn' => lang('crud.father_tlpn'),
                'father_email' => lang('crud.father_email'),
                'mother_name' => lang('crud.mother_name'),
                'mother_job' => lang('crud.mother_job'),
                'mother_tlpn' => lang('crud.mother_tlpn'),
                'mother_email' => lang('crud.mother_email'),
                'path_image' => lang('crud.path_image'),
                // 'created_by' => lang('crud.created_by')
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
        $model = new PendaftaranModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['genderItems'] = PendaftaranModel::listState();
        $dataEdit['registerItems'] = PendaftaranModel::listStateRegister();
        $dataEdit['kelasItems'] = Arr::pluck(model('App\Modules\Api\Models\KelasModel')->select(['kelas.id as key', 'kelas.name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
