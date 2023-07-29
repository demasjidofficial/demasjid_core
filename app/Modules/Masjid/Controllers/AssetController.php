<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\AssetModel;
use App\Modules\Masjid\Models\AssetFilter;
use App\Traits\UploadedFile;
use IlluminateAgnostic\Arr\Support\Arr;

class AssetController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\asset\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/asset';
    protected $langModel = 'asset';
    protected $modelName = 'App\Modules\Api\Models\AssetModel';
    protected $imageFolder = 'images';
    
    public function index(){
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

        $data = $this->request->getPost();
        $updateData = array_filter($data);

        if (!$this->model->update($id, $updateData)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        $uploadedImage = $this->uploadFile('image');
        $this->model->set('path_image', $uploadedImage);        

        $data = $this->request->getPost();
        if (!$this->model->insert($data)) {
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
        $model = model(AssetFilter::class);
        return [
            'headers' => [
                                    'name' => lang('crud.name'),
                'purchased_date' => lang('crud.purchased_date'),
                'purchased_price' => lang('crud.purchased_price'),
                'estimated_price' => lang('crud.estimated_price'),
                'entity_id' => lang('crud.entity_id'),
                'description' => lang('crud.description'),
                'path_image' => lang('crud.path_image'),
                'created_by' => lang('crud.created_by')
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
        $model = new AssetModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }            
        $dataEdit['entityItems'] = Arr::pluck(model('App\Modules\Api\Models\EntityModel')->select(['entity.id as key', 'entity.name as text'])->masjid()->asArray()->findAllExcludeJoin(), 'text', 'key');
        return $dataEdit;
    }
}
