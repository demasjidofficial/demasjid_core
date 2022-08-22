<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TargetFundraisingModel;
use App\Modules\BaitulMal\Models\TargetFundraisingFilter;

class TargetFundraisingController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\target_fundraising\\';
    protected $baseRoute = 'admin/baitulmal/targetfundraising';
    protected $langModel = 'target_fundraising';
    protected $modelName = 'App\Modules\Api\Models\TargetFundraisingModel';
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
        $data['target_nominal'] = (float)(str_replace(',', '', $data['target_nominal']));
        $datarange = explode(' - ', $data['jadwal_durasi']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['jadwal_mulai'] = date("Y-m-d", strtotime(($end_date[2] . '-' . $end_date[1] . '-' . $end_date[0])));
        $data['jadwal_akhir'] = date("Y-m-d", strtotime(($start_date[2] . '-' . $start_date[1] . '-' . $start_date[0])));
        unset($data['jadwal_durasi']);

        if (!$this->model->insert($data)) {
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
        $data['target_nominal'] = (float)(str_replace(',', '', $data['target_nominal']));
        $datarange = explode(' - ', $data['jadwal_durasi']);
        $start_date = explode('/', $datarange[0]);
        $end_date = explode('/', $datarange[1]);
        $data['jadwal_mulai'] = date("Y-m-d", strtotime(($end_date[2] . '-' . $end_date[1] . '-' . $end_date[0])));
        $data['jadwal_akhir'] = date("Y-m-d", strtotime(($start_date[2] . '-' . $start_date[1] . '-' . $start_date[0])));
        unset($data['jadwal_durasi']);

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
        $model = model(TargetFundraisingFilter::class);
        return [
            'headers' => [
                'campaign_name' => lang('crud.campaign_name'),
                'campaign' => lang('crud.target'),
                'donatur' => lang('crud.donatur'),
                'target_nominal' => lang('crud.target_nominal'),
                'tipe_donasi' => lang('crud.tipe_donasi'),
                'jadwal_mulai' => lang('crud.durasi'),

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
        $model = new TargetFundraisingModel();
        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $start_date = explode('-', $data->jadwal_mulai);
            $end_date = explode('-', $data->jadwal_akhir);
            $data->campaign_daterange =  $start_date[2] . '/' . $start_date[1] . '/' . (substr($start_date[0], 2)) . ' - ' . $end_date[2] . '/' . $end_date[1] . '/' . (substr($end_date[0], 2));
            $dataEdit['data'] = $data;
        }
        $dataEdit['donationtypeItems'] = ['' => 'Pilih Tipe'] + Arr::pluck(model('App\Modules\Api\Models\BmdonationtypeModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['donationcampaign'] = ['' => 'Pilih Kampanye'] + Arr::pluck(model('App\Modules\Api\Models\BmdonationcampaignModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['tipedonatur'] = ['' => 'Pilih Kategori Donatur'] + Arr::pluck(model('App\Modules\Api\Models\DonaturCategoryModel')->select(['id as key', 'name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
