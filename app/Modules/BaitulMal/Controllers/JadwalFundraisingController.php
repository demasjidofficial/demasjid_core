<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\JadwalFundraisingModel;
use App\Modules\BaitulMal\Models\JadwalFundraisingFilter;

class JadwalFundraisingController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\jadwal_fundraising\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/jadwalfundraising';
    protected $langModel = 'jadwal_fundraising';
    protected $modelName = 'App\Modules\Api\Models\JadwalFundraisingModel';
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

        $datarange = explode(' - ', $data['jadwal_durasi']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['target_dana'] = (float)(str_replace(',', '', $data['target_dana']));
        $data['jadwal_akhir'] = date("Y-m-d", strtotime(($end_date[2].'-'.$end_date[1].'-'.$end_date[0])));
        $data['jadwal_mulai'] = date("Y-m-d", strtotime(($start_date[2].'-'.$start_date[1].'-'.$start_date[0])));



        $updateData = array_filter($data);

        if (! $this->model->update($id, $updateData)) {
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

        $datarange = explode(' - ', $data['jadwal_durasi']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['target_dana'] = (float)(str_replace(',', '', $data['target_dana']));
        $data['jadwal_akhir'] = date("Y-m-d", strtotime(($end_date[2].'-'.$end_date[1].'-'.$end_date[0])));
        $data['jadwal_mulai'] = date("Y-m-d", strtotime(($start_date[2].'-'.$start_date[1].'-'.$start_date[0])));


        if (! $this->model->insert($data)) {
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
        $model = model(JadwalFundraisingFilter::class);
        return [
            'headers' => [
                'jadwal_durasi' => lang('crud.jadwal_durasi'),
                'jadwal_mulai' => lang('crud.jadwal_mulai'),
                'jadwal_akhir' => lang('crud.jadwal_akhir'),
                'target_dana' => lang('crud.target_dana')
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
        $model = new JadwalFundraisingModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $start_date = explode('-', $data->jadwal_mulai);
            $end_date = explode('-', $data->jadwal_akhir);
            $data->jadwal_durasi =  $start_date[2] . '/' . $start_date[1] .'/'. (substr($start_date[0], 2)) . ' - ' . $end_date[2] . '/' . $end_date[1] . '/' . (substr($end_date[0], 2));
            $dataEdit['data'] = $data;
        }

        return $dataEdit;
    }
}
