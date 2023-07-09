<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PendaftaranModel;
use App\Modules\Api\Models\WilayahModel;
use App\Traits\UploadedFile;
use App\Modules\Pesantren\Models\PendaftaranFilter;
use App\Modules\Api\Models\ProfileModel;
use App\Modules\Api\Models\RegisterModel;
use App\Modules\Api\Models\SitesocialsModel;

class RegisterController extends AdminCrudController
{
    use UploadedFile;
    protected $theme      = 'app';
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\register\\';
    protected $baseRoute = 'website/register';
    protected $langModel = 'pendaftaran';
    protected $modelName = 'App\Modules\Api\Models\RegisterModel';
    private $imageFolder = 'images';    


    public function new(){        
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();        
        $socials = (new SitesocialsModel())->asArray()->findAll();
        return $this->render($this->viewPrefix . 'form', array_merge(
            [
                'masjid_profile' => $profile,
                'masjid_socials' => $socials,
                'languages' => [],
            ],$this->getDataEdit())
        );
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
        $data['state'] = RegisterModel::WAIT;
        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }

        $url = url_to($this->getBaseController()); // .'?entity='.$this->request->getPost('entity_id');

        return redirect()->to($url)->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
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
