<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\GuruModel;
use App\Modules\Pesantren\Models\GuruFilter;
use App\Traits\UploadedFile;

class GuruController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Pesantren\Views\guru\\';
    protected $baseRoute = 'admin/pesantren/guru';
    protected $langModel = 'guru';
    protected $modelName = 'App\Modules\Api\Models\GuruModel';
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
                $this->model->set('path_image', $uploaded);
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
        $this->model->set('path_image', $uploadedImage);

        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(GuruFilter::class);
        return [
            'headers' => [
                'path_image' => lang('crud.path_image'),
                'name' => lang('crud.name'),
                'nip' => lang('crud.nip'),
                'jns_kelamin' => lang('crud.gender'),
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
        $model = new GuruModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['genderItems'] = GuruModel::listState();
        return $dataEdit;
    }
}
