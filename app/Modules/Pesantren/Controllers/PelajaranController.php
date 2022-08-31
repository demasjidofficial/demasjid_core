<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\PelajaranModel;
use App\Modules\Pesantren\Models\PelajaranFilter;

class PelajaranController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\pelajaran\\';
    protected $baseRoute = 'admin/pesantren/pelajaran';
    protected $langModel = 'pelajaran';
    protected $modelName = 'App\Modules\Api\Models\PelajaranModel';
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
        $model = model(PelajaranFilter::class);
        return [
            'headers' => [
                'kelas_id' => lang('crud.class'),
                'name' => lang('crud.name'),
                'category_id' => lang('crud.kategori_pelajaran'),
                'duration' => lang('crud.duration'),
                'uom_id' => lang('crud.uom_id'),
                'sequence' => lang('crud.sequence'),
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
        $model = new PelajaranModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['kelasItems'] = Arr::pluck(model('App\Modules\Api\Models\KelasModel')->select(['kelas.id as key', 'kelas.name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['kategori_pelajaranItems'] = Arr::pluck(model('App\Modules\Api\Models\KategoriPelajaranModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['uomItems'] = Arr::pluck(model('App\Modules\Api\Models\UomModel')->select(['uom.id as key', 'uom.name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
