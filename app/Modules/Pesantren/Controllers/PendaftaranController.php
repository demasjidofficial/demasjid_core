<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PendaftaranModel;
use App\Modules\Api\Models\WilayahModel;
use App\Modules\Pesantren\Models\PendaftaranFilter;
use App\Traits\UploadedFile;
use App\Controllers\BaseController;
use App\Modules\Api\Entities\Pendaftaran;

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
        // $pendaftaran = (new PendaftaranModel())->pesantren()->asArray()->find()->first();
        // $siswa = (new SiswaModel())->pesantren()->asArray()->find()->first();

        // $wilayah = collect((new WilayahModel())->extractWilayah($pendaftaran['desa_id'])->asArray()->findAll())->keyBy('kode');
        // $extractWilayah = extractWilayah($pendaftaran['desa_id']);
        // $provinsi_id = $extractWilayah['provinsi'];
        // $kota_id = $extractWilayah['kota/kabupaten'];
        // $kecamatan_id = $extractWilayah['kecamatan'];

        // $data['desa'] = $wilayah[$pendaftaran['desa_id']]['nama'];
        // $data['kecamatan'] = $wilayah[$kecamatan_id]['nama'];
        // $data['kota'] = $wilayah[$kota_id]['nama'];
        // $data['provinsi'] = $wilayah[$provinsi_id]['nama'];

        return parent::index();
    }

    public function edit($id = null)
    {
        return parent::edit($id);
    }

    public function update($id = null)
    {
        $pendaftaran = (new PendaftaranModel())->pesantren()->asArray()->findAll();
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

            $photo = $pendaftaran['path_image'];
            $name = $pendaftaran['name'];
            $nickName = $pendaftaran['nick_name'];
            $nis = $pendaftaran['nis'];
            $kelas = $pendaftaran['class_id'];
            $namaSekolah = $pendaftaran['school_origin'];
            $gender = $pendaftaran['gender'];
            $tempatLahir = $pendaftaran['birth_place'];
            $tglLahir = $pendaftaran['birth_date'];
            $provinsi = $pendaftaran['provinsi_id'];
            $kota = $pendaftaran['kota_id'];
            $kecamatan = $pendaftaran['kecamatan_id'];
            $desa = $pendaftaran['desa_id'];
            $alamat = $pendaftaran['address'];
            $namaAyah = $pendaftaran['father_name'];
            $pekerjaanAyah = $pendaftaran['father_job'];
            $tlpnAyah = $pendaftaran['father_tlpn'];
            $emailAyah = $pendaftaran['father_email'];
            $namaIbu = $pendaftaran['father_name'];
            $pekerjaanIbu = $pendaftaran['father_job'];
            $tlpnIbu = $pendaftaran['father_tlpn'];
            $emailIbu = $pendaftaran['father_email'];
            $deskripsi = $pendaftaran['description'];

        if ($this->db->table('pendaftaran')->like('state', 'diterima')){
            $sqlInsert = "INSERT INTO siswa ('path_image', 'name', 'nick_name', 'nis', 'class_id', 'school_origin', 'gender', 'birth_place', 'birth_date', 'provinsi_id', 'kota_id', 'kecamatan_id', 'desa_id', 'address', 'father_name', 'father_job', 'father_tlpn', 'father_email', 'mother_name', 'mother_job', 'mother_tlpn', 'mother_email', 'description') 
                        VALUES($photo, $name, $nickName, $nis, $kelas, $namaSekolah, $gender, $tempatLahir, $tglLahir, $provinsi, $kota, $kecamatan, $desa, $alamat, $namaAyah, $pekerjaanAyah, $tlpnAyah, $emailAyah, $namaIbu, $pekerjaanIbu, $tlpnIbu, $emailIbu, $deskripsi)";
            $this->db->query($sqlInsert);
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
                'path_image' => lang('crud.path_image'),
                'name' => lang('crud.name'),
                // 'nick_name' => lang('crud.nick_name'),
                'nis' => lang('crud.nis'),
                'class_id' => lang('crud.class_id'),
                'school_origin' => lang('crud.school_origin'),
                'gender' => lang('crud.gender'),

                //tempat tanggal lahir
                'birth_place' => lang('crud.tmpt_tgl_lahir'),
                // 'birth_place' => lang('crud.birth_place'),
                // 'birth_date' => lang('crud.birth_date'),

                //alamat
                'desa_id' => lang('crud.address'),
                // 'provinsi_id' => lang('crud.provinsi_id'),
                // 'kota_id' => lang('crud.kota_id'),
                // 'kecamatan_id' => lang('crud.kecamatan_id'),
                // 'desa_id' => lang('crud.desa_id'),
                // 'address' => lang('crud.address'),

                'father_name' => lang('crud.father_name'),
                'father_job' => lang('crud.father_job'),
                'father_tlpn' => lang('crud.father_tlpn'),
                'father_email' => lang('crud.father_email'),
                'mother_name' => lang('crud.mother_name'),
                'mother_job' => lang('crud.mother_job'),
                'mother_tlpn' => lang('crud.mother_tlpn'),
                'mother_email' => lang('crud.mother_email'),
                'state' => lang('crud.state'),
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
        $model = new PendaftaranModel();
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



        $dataEdit['provinsiItems'] = ['' => 'Pilih provinsi'] + Arr::pluck(model('App\Modules\Api\Models\WilayahModel')->select(['kode as key', 'nama as text'])->provinsi()->asArray()->findAll(), 'text', 'key');
        $dataEdit['genderItems'] = PendaftaranModel::listState();
        $dataEdit['registerItems'] = PendaftaranModel::listStateRegister();
        $dataEdit['kelasItems'] = Arr::pluck(model('App\Modules\Api\Models\KelasModel')->select(['kelas.id as key', 'kelas.name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
