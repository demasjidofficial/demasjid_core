<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\RoomReservModel;
use App\Modules\Room\Models\RoomReservFilter;

class RoomReservController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Room\Views\room_reserv\\';
    protected $baseRoute = 'admin/room/roomreserv';
    protected $langModel = 'room_reserv';
    protected $modelName = 'App\Modules\Api\Models\RoomReservModel';
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
        $model = model(RoomReservFilter::class);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'namaruangan' => lang('crud.namaruangan'),
                'room_id' => lang('crud.room_id'),
                'no_tlp' => lang('crud.no_tlp'),
                'alamat' => lang('crud.address'),
                'start_date' => lang('crud.start_date'),
                'end_date' => lang('crud.end_date'),
                'agenda' => lang('crud.agenda'),
                'keterangan' => lang('crud.description'),
                'status' => lang('crud.state'),
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
        $model = new RoomReservModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['stateItems'] = RoomReservModel::listState();
        $dataEdit['roomItems'] = Arr::pluck(model('App\Modules\Api\Models\RoomModel')->select(['id as key', 'namaruangan as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
