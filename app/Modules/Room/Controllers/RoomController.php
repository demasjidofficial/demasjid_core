<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\RoomModel;
use App\Modules\Room\Models\RoomFilter;
use App\Traits\UploadedFile;

class RoomController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Room\Views\Room\\';
    protected $baseRoute = 'admin/room/room';
    protected $langModel = 'Room';
    protected $modelName = 'App\Modules\Api\Models\RoomModel';
    private $imageFolder = 'images';
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
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('gambar', $uploaded);
            }
        }
        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('gambar', $uploadedImage);
        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(RoomFilter::class);
        return [
            'headers' => [
                'gambar' => lang('crud.gambar'),
                'nama' => lang('crud.name'),
                'keterangan' => lang('crud.description'),
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
        $model = new RoomModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        return $dataEdit;
    }
}
