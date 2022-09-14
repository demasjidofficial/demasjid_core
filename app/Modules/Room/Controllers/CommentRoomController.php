<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\CommentRoomModel;
use App\Modules\Room\Models\CommentRoomFilter;

class CommentRoomController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Room\Views\comment_room\\';
    protected $baseRoute = 'admin/room/commentroom';
    protected $langModel = 'comment_room';
    protected $modelName = 'App\Modules\Api\Models\CommentRoomModel';
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
        $model = model(CommentRoomFilter::class);
        return [
            'headers' => [
                'room_id' => lang('crud.room_id'),
                'Kritik' => lang('crud.kritik'),
                'Saran' => lang('crud.saran'),
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
        $model = new CommentRoomModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['roomItems'] = Arr::pluck(model('App\Modules\Api\Models\RoomModel')->select(['id as key'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
