<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\RoomReservationModel;
use App\Modules\Room\Models\RoomReservationFilter;

class RoomReservationController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Room\Views\room_reservation\\';
    protected $baseRoute = 'admin/room/roomreservation';
    protected $langModel = 'room_reservation';
    protected $modelName = 'App\Modules\Api\Models\RoomReservationModel';
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
        $model = model(RoomReservationFilter::class);
        return [
            'headers' => [
                'room_id' => lang('crud.room_id'),
                'namapemesan' => lang('crud.namapemesan'),
                'no_tlp' => lang('crud.no_tlp'),
                'alamat' => lang('crud.address'),
                'start_date' => lang('crud.start_date'),
                'end_date' => lang('crud.end_date'),
                'agenda' => lang('crud.agenda'),
                'keterangan' => lang('crud.description'),
                'status' => lang('crud.state'),
                //'created_by' => lang('crud.created_by')
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
        $model = new RoomReservationModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['roomItems'] = Arr::pluck(model('App\Modules\Api\Models\RoomModel')->select(['id as key', 'nama as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['stateItems'] = RoomReservationModel::listState();
        return $dataEdit;
    }
}
