<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\KelasModel;
use App\Modules\Pesantren\Models\KelasFilter;

class KelasController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\kelas\\';
    protected $baseRoute = 'admin/pesantren/kelas';
    protected $langModel = 'kelas';
    protected $modelName = 'App\Modules\Api\Models\KelasModel';
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
        $model = model(KelasFilter::class);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'description' => lang('crud.description'),
                'level_id' => lang('crud.level_id'),
                'capacity' => lang('crud.capacity'),
                'duration' => lang('crud.duration'),
                'uom_id' => lang('crud.uom_id'),
                'entity_id' => lang('crud.entity_id'),
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
        $model = new KelasModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['tingkat_pendidikanItems'] = Arr::pluck(model('App\Modules\Api\Models\TingkatPendidikanModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['uomItems'] = Arr::pluck(model('App\Modules\Api\Models\UomModel')->select(['uom.id as key', 'uom.name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['entity.id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
