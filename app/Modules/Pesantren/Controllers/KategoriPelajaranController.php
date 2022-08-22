<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\KategoriPelajaranModel;
use App\Modules\Pesantren\Models\KategoriPelajaranFilter;

class KategoriPelajaranController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\kategori_pelajaran\\';
    protected $baseRoute = 'admin/pesantren/kategoripelajaran';
    protected $langModel = 'kategori_pelajaran';
    protected $modelName = 'App\Modules\Api\Models\KategoriPelajaranModel';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(KategoriPelajaranFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
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
        $model = new KategoriPelajaranModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        
        return $dataEdit;
    }
}
