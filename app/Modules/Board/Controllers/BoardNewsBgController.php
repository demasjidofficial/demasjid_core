<?php

namespace App\Modules\Board\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\BoardNewsBgModel;
use App\Modules\Board\Models\BoardNewsBgFilter;
use App\Traits\UploadedFile;

class BoardNewsBgController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Board\Views\board_news_bg\\';
    protected $baseRoute = 'admin/board/boardnewsbg';
    protected $langModel = 'board_news_bg';
    protected $modelName = 'App\Modules\Api\Models\BoardNewsBgModel';
    private $imageFolder = 'images';
    
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('path_image', $uploadedImage);

        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(BoardNewsBgFilter::class);
        return [
            'headers' => [
                'path_image' => lang('crud.path_image'),
                // 'duration' => lang('crud.duration'),
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
        $model = new BoardNewsBgModel();

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
