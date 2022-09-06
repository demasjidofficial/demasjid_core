<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitepostsModel;
use App\Modules\Website\Models\SitepostsFilter;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Traits\UploadedFile;

class SitepostsController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\siteposts\\';
    protected $baseRoute = 'admin/website/posts';
    protected $langModel = 'siteposts';
    private $imageFolder = 'images';
    protected $modelName = 'App\Modules\Api\Models\SitepostsModel';
    protected $LANGUAGE_LISTS = [ '', 'Indonesia', 'Arab', 'English' ];

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

        $data = $this->request->getPost();
        // default to language_id = 1 / indonesia
        $data['language_id'] = 1;

        if (! $this->model->insert($data)) {            
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(SitepostsFilter::class);
        return [
            'headers' => [
                'title' => 'title',
                'subtitle' => 'subtitle',
                // 'path_image' => 'path_image',
                // 'content' => 'content',
                'permalink' => 'permalink',
                // 'meta_title' => 'meta_title',
                // 'meta_desc' => 'meta_desc',
                'labels' => 'labels',
                'language_id' => 'language_id',
                'state' => 'state',
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
            'language_lists' => $this->LANGUAGE_LISTS,
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new SitepostsModel();

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
