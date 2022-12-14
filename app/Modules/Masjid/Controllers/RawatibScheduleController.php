<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\RawatibScheduleModel;
use App\Modules\Masjid\Models\RawatibScheduleFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class RawatibScheduleController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\schedule\rawatib_schedule\\';
    protected $baseRoute = 'admin/masjid/rawatibschedule';
    protected $langModel = 'rawatib_schedule';
    protected $modelName = 'App\Modules\Api\Models\RawatibScheduleModel';
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
        $model = model(RawatibScheduleFilter::class);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'pray_time' => lang('crud.pray_time'),
                'is_automatic' => lang('crud.is_automatic'),
                'imam_id' => lang('crud.imam_id')
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
        $model = new RawatibScheduleModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['imamItems'] = Arr::pluck(model('App\Modules\Api\Models\ImamModel')->select(['id as key', 'name as text'])->permanent()->asArray()->findAll(), 'text', 'key');
        $dataEdit['sholatItems'] = $model->getListSholat();
        return $dataEdit;
    }
}
