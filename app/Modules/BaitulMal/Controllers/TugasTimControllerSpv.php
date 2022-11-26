<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TugasTimModelSpv;
use App\Modules\BaitulMal\Models\TugasTimSpvFilter;

class TugasTimControllerSpv extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tugas_tim_spv\\';
    protected $baseRoute = 'admin/baitulmal/tugastimspv';
    protected $langModel = 'tugas_tim_spv';
    protected $modelName = 'App\Modules\Api\Models\TugasTimModelSpv';
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
        $data = $this->request->getPost();
        $data['nominal'] = (float)(str_replace('.', '', $data['nominal']));
        $data['nominal_target'] = (float)(str_replace('.', '', $data['nominal_target']));


        if (!$this->model->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $data['nominal'] = (float)(str_replace('.', '', $data['nominal']));
        $data['nominal_target'] = (float)(str_replace('.', '', $data['nominal_target']));


        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {

        $model = model(TugasTimSpvFilter::class);
        return [
            'headers' => [

                'tugas_nama' => lang('crud.tugas_tim'),
                'tim_nama' => lang('crud.nama_tim'),
               

                'progres' => lang('crud.progres')
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
        $model = new TugasTimModelSpv();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['timItems'] = ['' => 'Pilih Tim'] + Arr::pluck(model('App\Modules\Api\Models\TimFundraisingModel')->select(['tim_fundraising.id as key', 'tim_fundraising.nama_tim as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['stateItems'] = TugasTimModelSpv::listState();
        return $dataEdit;
    }
}
