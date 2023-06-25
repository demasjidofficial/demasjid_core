<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\SiswaModel;
use App\Modules\Api\Models\WilayahModel;
use App\Modules\Pesantren\Models\SiswaFilter;
use App\Traits\UploadedFile;

class SiswaController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\siswa\\';
    protected $baseRoute = ADMIN_AREA.'/pesantren/siswa';
    protected $langModel = 'siswa';
    protected $modelName = 'App\Modules\Api\Models\SiswaModel';
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
        $model = model(SiswaFilter::class);
        return [
            'headers' => [
                'path_image' => lang('crud.path_image'),
                'name' => lang('crud.name'),
                'nick_name' => lang('crud.nick_name'),
                'gender' => lang('crud.gender'),
                'birth_place' => lang('crud.tmpt_tgl_lahir'),
                // 'birth_place' => lang('crud.birth_place'),
                // 'birth_date' => lang('crud.birth_date'),
                'provinsi_id' => lang('crud.provinsi_id'),
                'kota_id' => lang('crud.kota_id'),
                'kecamatan_id' => lang('crud.kecamatan_id'),
                'desa_id' => lang('crud.desa_id'),
                'address' => lang('crud.address'),
                'nis' => lang('crud.nis'),
                'kelas_id' => lang('crud.kelas_id'),
                'school_origin' => lang('crud.school_origin'),
                'father_name' => lang('crud.father_name'),
                'father_job' => lang('crud.father_job'),
                'father_tlpn' => lang('crud.father_tlpn'),
                'father_email' => lang('crud.father_email'),
                'mother_name' => lang('crud.mother_name'),
                'mother_job' => lang('crud.mother_job'),
                'mother_tlpn' => lang('crud.mother_tlpn'),
                'mother_email' => lang('crud.mother_email'),
                'tahun_ajaran_id' => lang('crud.tahun_ajaran'),
                'description' => lang('crud.description'),
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
        $model = new SiswaModel();
        $dataEdit['kotaItems'] = ['' => 'Pilih kota/kabupaten'];
        $dataEdit['kecamatanItems'] = ['' => 'Pilih kecamatan'];
        $dataEdit['desaItems'] = ['' => 'Pilih desa'];

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $wilayah = collect((new WilayahModel())->extractWilayah($data->desa_id)->asArray()->findAll())->keyBy('kode');
            $extractWilayah = extractWilayah($data->desa_id);
            $data->provinsi_id = $extractWilayah['provinsi'];
            $data->provinsi_id = $extractWilayah['provinsi'];
            $data->kota_id = $extractWilayah['kota/kabupaten'];
            $data->kecamatan_id = $extractWilayah['kecamatan'];
            $dataEdit['data'] = $data;
            $dataEdit['kotaItems'] += [$data->kota_id => $wilayah[$data->kota_id]['nama']];
            $dataEdit['kecamatanItems'] += [$data->kecamatan_id => $wilayah[$data->kecamatan_id]['nama']];
            $dataEdit['desaItems'] += [$data->desa_id => $wilayah[$data->desa_id]['nama']];
        }

        $dataEdit['genderItems'] = SiswaModel::listState();
        $dataEdit['tahunAjaranItems'] = Arr::pluck(model('App\Modules\Api\Models\TahunAjaranModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['kelasItems'] = Arr::pluck(model('App\Modules\Api\Models\KelasModel')->select(['kelas.id as key', 'kelas.name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['provinsiItems'] = ['' => 'Pilih provinsi'] + Arr::pluck(model('App\Modules\Api\Models\WilayahModel')->select(['kode as key', 'nama as text'])->provinsi()->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
