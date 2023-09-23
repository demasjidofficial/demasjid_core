<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Entities\TimStaff;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\TimFundraisingModel;
use App\Modules\Api\Models\TimStaffModel;
use App\Modules\BaitulMal\Models\TimFundraisingFilter;

class TimFundraisingController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tim_fundraising\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/timfundraising';
    protected $langModel = 'tim_fundraising';
    protected $modelName = 'App\Modules\Api\Models\TimFundraisingModel';
    public function index($id = null)
    {
        return parent::index($id);
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
        $model = model(TimFundraisingFilter::class);
        $dataModel = $model->paginate(setting('App.perPage'));
        return [
            'headers' => [

                'id_target' => lang('crud.id_target'),
                'campaign' => lang('crud.target'),
                'jadwal_mulai' => lang('crud.durasi'),
                'jadwal_mulai' => lang('crud.durasi'),
                'tim' => lang('crud.tim_fundraising'),



            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'timFund' => $this->getTimFund($dataModel),
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new TimFundraisingModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;

            $dataEdit['timStaff'] = (new TimStaffModel())->where('tim_id', $id)->findStaff();


        }
        $dataEdit['targetItems'] = ['' => 'Pilih Target'] + Arr::pluck(model('App\Modules\Api\Models\TargetFundraisingListModel')->select(['id as key', 'campaign_name as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['supervisorItems'] = ['' => 'Pilih Supervisior'] + Arr::pluck(model('App\Modules\Api\Models\UsersModel')->select(['users.id as key', 'users.username as text'])->asArray()->findSpv(), 'text', 'key');
        $dataEdit['staffItems'] = ['' => 'Pilih Staff'] + Arr::pluck(model('App\Modules\Api\Models\UsersModel')->select(['users.id as key', 'users.username as text'])->asArray()->findStaff(), 'text', 'key');

        return $dataEdit;
    }

    protected function getDataTim($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new TimFundraisingModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;

            $dataEdit['timStaff'] = (new TimStaffModel())->where('tim_id', $id)->findAll();

        }

        return $dataEdit;
    }

    public function getTimFund($dataModel)
    {
        # code...
        $list_tim = [];
        foreach ($dataModel as $d) {
            # code...
            $timFund = collect((new TimStaffModel())->where('tim_id', $d->id)->asArray()->findStaff());

        }

        return $timFund;
    }
}
