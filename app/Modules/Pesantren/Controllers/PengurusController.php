<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PengurusModel;
use App\Modules\Pesantren\Models\PengurusFilter;

class PengurusController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\pengurus\\';
    protected $baseRoute = ADMIN_AREA.'/pesantren/pengurus';
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
        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(PengurusFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'description' => lang('crud.description'),
                'jabatan_id' => lang('crud.jabatan_id'),
                'address' => lang('crud.address'),
                'path_image' => lang('crud.path_image'),
                'telephone' => lang('crud.telephone'),
                'email' => lang('crud.email'),
                'provinsi_id' => lang('crud.provinsi_id'),
                'kota_id' => lang('crud.kota_id'),
                'kecamatan_id' => lang('crud.kecamatan_id'),
                'desa_id' => lang('crud.desa_id'),
                'entity_id' => lang('crud.entity_id')
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
        $model = new PengurusModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['jabatanItems'] = Arr::pluck(model('App\Modules\Api\Models\JabatanModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
