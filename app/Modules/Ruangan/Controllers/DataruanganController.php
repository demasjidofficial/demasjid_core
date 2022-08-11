<?php

namespace App\Modules\Ruangan\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\EntityModel;
use App\Modules\Api\Models\ProfileModel;
use App\Modules\Api\Models\WilayahModel;
use App\Modules\Masjid\Models\EntityFilter;
use App\Traits\UploadedFile;
use IlluminateAgnostic\Arr\Support\Arr;

class DataruanganController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Ruangan\Views\ruangan\\';
    protected $baseRoute = 'admin/room/';
    protected $langModel = 'profile';
    protected $modelName = 'App\Modules\Api\Models\ProfileModel';
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

        $logo = $this->request->getFile('logo');
        if (!empty($logo)) {
            if ($logo->getSize() > 0) {
                $uploaded = $this->uploadFile('logo');
                $this->model->set('path_logo', $uploaded);
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

        $uploadedLogo = $this->uploadFile('logo');
        $this->model->set('path_logo', $uploadedLogo);

        $data = $this->request->getPost();
        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        $url = url_to($this->getBaseController()).'?entity='.$this->request->getPost('entity_id');

        return redirect()->to($url)->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(EntityFilter::class);
        $model->pesantren();
        $entities = $model->findAll();
        $entityId = $this->request->getGet('entity') ?? null;
        $profileId = null;
        if(!empty($entityId)){
            $tmpProfile = (new ProfileModel())->where(['entity_id' => $entityId])->first();
            if($tmpProfile){
                $profileId = $tmpProfile->id;
            }
        }

        return [
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'entities' => $entities,
            'dataForm' => $this->getDataEdit($profileId),
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new ProfileModel();
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
            $data->kota_id = $extractWilayah['kota/kabupaten'];
            $data->kecamatan_id = $extractWilayah['kecamatan'];
            $dataEdit['data'] = $data;
            $dataEdit['activeEntity'] = $data->entity_id;
            $dataEdit['kotaItems'] += [$data->kota_id => $wilayah[$data->kota_id]['nama']];
            $dataEdit['kecamatanItems'] += [$data->kecamatan_id => $wilayah[$data->kecamatan_id]['nama']];
            $dataEdit['desaItems'] += [$data->desa_id => $wilayah[$data->desa_id]['nama']];
        } else {
            $activeEntity = $this->request->getGet('entity') ?? (new EntityModel())->pesantren()->first()->id;
            $dataEdit['activeEntity'] = $activeEntity;
        }
        $dataEdit['provinsiItems'] = ['' => 'Pilih provinsi'] + Arr::pluck(model('App\Modules\Api\Models\WilayahModel')->select(['kode as key', 'nama as text'])->provinsi()->asArray()->findAll(), 'text', 'key');

        return $dataEdit;
    }
}
