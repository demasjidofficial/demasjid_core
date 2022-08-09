<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Website\Models\SitesocialsFilter;
use App\Traits\UploadedFile;
use IlluminateAgnostic\Arr\Support\Arr;

class SitesocialsController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitesocials\\';
    protected $baseRoute = 'admin/website/socials';
    protected $langModel = 'sitesocials';
    protected $modelName = 'App\Modules\Api\Models\SitesocialsModel';
    private $imageFolder = 'images';
    
    public function index(){
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_icon', $uploaded);
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
                $this->model->set('path_icon', $uploaded);
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
                $this->model->set('path_icon', $uploaded);
            }
        }

        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(SitesocialsFilter::class);
        return [
            'headers' => [
                'path_icon' => lang('crud.path_icon'),
                'name' => lang('crud.name'),
                'link' => lang('crud.link'),
                'state' => lang('crud.state')
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
        $model = new SitesocialsModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        
        return $dataEdit;
    }
}
