<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SiteslidersModel;
use App\Modules\Website\Models\SiteslidersFilter;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Traits\UploadedFile;

class SiteslidersController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitesliders\\';
    protected $baseRoute = ADMIN_AREA.'/website/sliders';
    protected $langModel = 'sitesliders';
    protected $modelName = 'App\Modules\Api\Models\SiteslidersModel';
    private $imageFolder = 'images';

    public function index(){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }
        
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(SiteslidersFilter::class);
        return [
            'headers' => [
                'name' => 'name',
                'path_image' => 'image',
                'sitepage_id' => 'page',
                'sequence' => 'sequence',
                'state' => 'state',
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
        $model = new SiteslidersModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['pageItems'] = Arr::pluck(model('App\Modules\Api\Models\SitepagesModel')->select(['id as key','title as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        
        return $dataEdit;
    }
}
