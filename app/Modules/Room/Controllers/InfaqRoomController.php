<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\InfaqRoomModel;
use App\Modules\Room\Models\InfaqRoomFilter;

class InfaqRoomController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Room\Views\infaq_room\\';
    protected $baseRoute = 'admin/room/infaqroom';
    protected $langModel = 'infaq_room';
    protected $modelName = 'App\Modules\Api\Models\InfaqRoomModel';
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
        $model = model(InfaqRoomFilter::class);
        return [
            'headers' => [
                'nama_pemesan' => lang('crud.namapemesan'),
                'room_id' => lang('crud.room_id'),
                'tanggal_infaq' => lang('crud.infaq_date'),
                'jumlah_infaq' => lang('crud.jumlahInfaq'),
                'status' => lang('crud.state'),
                // 'created_by' => lang('crud.created_by')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
            'dataStats' => $this->getDataStats($model->find()),
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new InfaqRoomModel();

        if (!empty($id)) {
            $data = $model->find($id);
            die($data);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
    }
    protected function getDataStats($data)
    {
        $totalInfaq = 0;
        $jumlahInfaq = 0;
        $countInfaq = 0;
        if ((isset($data) && count($data))) {
            foreach ($data as $item) {
                if ($item->state !== InfaqRoomModel::CASH) {
                    $totalInfaq++;
                }
                $totalInfaq = $totalInfaq + $item->campaign_collected;
                $jumlahInfaq = $jumlahInfaq + $item->jumlah_infaq;
                log_message("error", json_encode($item));
            }
        }

        return (object)[
            'totalInfaq' => $totalInfaq,
            'jumlahInfaq' => $jumlahInfaq,
            'countInfaq' => $countInfaq,
            'totalInfaq' => model('App\Modules\Api\Models\InfaqRoomModel')->countAll(),
        ];
    }
}
