<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\PengurusModel;
use App\Modules\Api\Models\WilayahModel;
use App\Modules\Masjid\Models\PengurusFilter;
use App\Traits\UploadedFile;
use IlluminateAgnostic\Arr\Support\Arr;

class PengurusController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\pengurus\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/pengurus';
    protected $langModel = 'pengurus';
    protected $modelName = 'App\Modules\Api\Models\PengurusModel';
    

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
        if(!empty($image)) {
            $uploaded = $this->uploadFile('image');
            $this->model->set('path_image', $uploaded);
        }

        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $uploaded = $this->uploadFile('image');
        $this->model->set('path_image', $uploaded);

        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(PengurusFilter::class);
        $model->masjid();
        return [
            'headers' => [
                'name' => lang('crud.name'),
                // 'description' => lang('crud.description'),
                'jabatan_id' => lang('crud.role'),
                // 'address' => lang('crud.address'),
                // 'path_image' => lang('crud.path_image'),
                'telephone' => lang('crud.telephone'),
                // 'email' => lang('crud.email'),
                // 'provinsi_id' => lang('crud.provinsi_id'),
                // 'kota_id' => lang('crud.kota_id'),
                // 'kecamatan_id' => lang('crud.kecamatan_id'),
                // 'desa_id' => lang('crud.desa_id'),
                // 'entity_id' => lang('crud.entity_id')
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
        $model = new PengurusModel();

        $dataEdit['kotaItems'] = ['' => 'Pilih kota/kabupaten'];
        $dataEdit['kecamatanItems'] = ['' => 'Pilih kecamatan'];
        $dataEdit['desaItems'] = ['' => 'Pilih desa'];

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $wilayah = collect((new WilayahModel())->whereIn('kode', [$data->kota_id, $data->kecamatan_id, $data->desa_id])->asArray()->findAll())->keyBy('kode');
            $dataEdit['kotaItems'] += [$data->kota_id => $wilayah[$data->kota_id]['nama']];
            $dataEdit['kecamatanItems'] += [$data->kecamatan_id => $wilayah[$data->kecamatan_id]['nama']];
            $dataEdit['desaItems'] += [$data->desa_id => $wilayah[$data->desa_id]['nama']];
            $dataEdit['data'] = $data;
        }

        $dataEdit['jabatanItems'] = Arr::pluck(model('App\Modules\Api\Models\JabatanModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['id as key', 'name as text'])->masjid()->asArray()->findAllExcludeJoin(), 'text', 'key');
        $dataEdit['provinsiItems'] = ['' => 'Pilih provinsi'] + Arr::pluck(model('App\Modules\Api\Models\WilayahModel')->select(['kode as key', 'nama as text'])->provinsi()->asArray()->findAll(), 'text', 'key');


        return $dataEdit;
    }
}
