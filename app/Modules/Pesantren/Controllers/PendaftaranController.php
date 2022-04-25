<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PendaftaranModel;
use App\Modules\Api\Models\WilayahModel;
use App\Traits\UploadedFile;
use App\Modules\Pesantren\Models\PendaftaranFilter;

class PendaftaranController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\pendaftaran\\';
    protected $baseRoute = 'admin/pesantren/pendaftaran';
    protected $langModel = 'pendaftaran';
    protected $modelName = 'App\Modules\Api\Models\PendaftaranModel';
    private $imageFolder = 'images';

    public function index(){
        return parent::index();
    }

    public function edit($id = null){
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

        $data = $this->request->getPost();
        $updateData = array_filter($data);

        if (!$this->model->update($id, $updateData)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        $url = url_to($this->getBaseController()).'?entity='.$this->request->getPost('entity_id');

        return redirect()->to($url)->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('path_image', $uploadedImage);

        $data = $this->request->getPost();
        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        $url = url_to($this->getBaseController()).'?entity='.$this->request->getPost('entity_id');

        return redirect()->to($url)->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null){
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
                // 'nick_name' => lang('crud.nick_name'),
                // 'birth_date' => lang('crud.birth_date'),
                // 'birth_place' => lang('crud.birth_place'),
                // 'gender' => lang('crud.gender'),
                // 'provinsi_id' => lang('crud.provinsi_id'),
                // 'kota_id' => lang('crud.kota_id'),
                // 'kecamatan_id' => lang('crud.kecamatan_id'),
                // 'desa_id' => lang('crud.desa_id'),
                // 'address' => lang('crud.address'),
                // 'school_origin' => lang('crud.school_origin'),
                // 'description' => lang('crud.description'),
                // 'father_name' => lang('crud.father_name'),
                // 'father_job' => lang('crud.father_job'),
                // 'father_tlpn' => lang('crud.father_tlpn'),
                // 'father_email' => lang('crud.father_email'),
                // 'mother_name' => lang('crud.mother_name'),
                // 'mother_job' => lang('crud.mother_job'),
                // 'mother_tlpn' => lang('crud.mother_tlpn'),
                // 'mother_email' => lang('crud.mother_email'),
                // 'path_image' => lang('crud.path_image'),
                'created_by' => lang('crud.created_by')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new PendaftaranModel();

        $dataEdit['kotaItems'] = ['' => 'Pilih kota/kabupaten'];
        $dataEdit['kecamatanItems'] = ['' => 'Pilih kecamatan'];
        $dataEdit['desaItems'] = ['' => 'Pilih desa'];
        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            
            $wilayah = collect((new WilayahModel())->extractWilayah($data->desa_id)->asArray()->findAll())->keyBy('kode');
            $extractWilayah = extractWilayah($data->desa_id);
            $data->provinsi_id = $extractWilayah['provinsi'];
            $data->kota_id = $extractWilayah['kota/kabupaten'];
            $data->kecamatan_id = $extractWilayah['kecamatan'];
            $dataEdit['data'] = $data;
            $dataEdit['activeEntity'] = $data->entity_id;
            $dataEdit['kotaItems'] += [$data->kota_id => $wilayah[$data->kota_id]['nama']];
            $dataEdit['kecamatanItems'] += [$data->kecamatan_id => $wilayah[$data->kecamatan_id]['nama']];
            $dataEdit['desaItems'] += [$data->desa_id => $wilayah[$data->desa_id]['nama']];
        }
        
        $dataEdit['stateItems'] = PendaftaranModel::listState();
        $dataEdit['provinsiItems'] = ['' => 'Pilih provinsi'] + Arr::pluck(model('App\Modules\Api\Models\WilayahModel')->select(['kode as key', 'nama as text'])->provinsi()->asArray()->findAll(), 'text', 'key');
        $dataEdit['kelasItems'] = Arr::pluck(model('App\Modules\Api\Models\KelasModel')->select(['kelas.id as key','kelas.name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}
