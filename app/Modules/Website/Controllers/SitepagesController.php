<?php

namespace App\Modules\Website\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SitepagesModel;
use App\Modules\Website\Models\SitepagesFilter;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Traits\UploadedFile;

class SitepagesController extends AdminCrudController
{
    use UploadedFile;
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Website\Views\sitepages\\';
    protected $baseRoute = ADMIN_AREA.'/website/pages';
    protected $langModel = 'sitepages';
    protected $modelName = 'App\Modules\Api\Models\SitepagesModel';

    public function index()
    {
        $image = $this->request->getFile('image');

        if (!empty($image)) {
            if ($image->getSize() > 0) {
                $uploaded = $this->uploadFile('image');
                $this->model->set('path_image', $uploaded);
            }
        }

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

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(SitepagesFilter::class);
        return [
            'headers' => [
                'title' => lang('crud.title'),
                //'subtitle' => lang('crud.subtitle'),
                'permalink' => lang('crud.permalink'),
                'sitemenu_id' => lang('crud.menu'),
                'language_id' => lang('crud.language'),
                'state' => lang('crud.state'),
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager,
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new SitepagesModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['menuItems'] = Arr::pluck(model('App\Modules\Api\Models\SitemenusModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');

        return $dataEdit;
    }
}
