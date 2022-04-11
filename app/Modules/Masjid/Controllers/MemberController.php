<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\MemberModel;
use App\Modules\Masjid\Models\MemberFilter;

class MemberController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\member\\';
    protected $baseRoute = 'admin/masjid/member';
    protected $langModel = 'member';
    protected $modelName = 'App\Modules\Api\Models\MemberModel';
    private $pathLogo;
    private $pathImage;
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
        $newLogo = $this->request->getFile('logo');

        if ($newLogo->isValid()) {
            $this->uploadLogo();
            $this->model->set('path_logo', $this->getPathLogo());
        }

        $newImage = $this->request->getFile('image');
        if ($newImage->isValid()) {
            $this->uploadImage();
            $this->model->set('path_image', $this->getPathImage());
        }

        $isActivation = $this->isActivation($id);
        $data = $this->request->getPost();
        $updateData = array_filter($data);

        if (!$this->model->update($id, $updateData)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();
        if($isActivation){
            $this->sendEmailActivation($id);
        }
        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        $wilayahId = $this->request->getPost('wilayah_id');
        $this->uploadLogo();
        $this->uploadImage();
        $this->model->set('path_logo', $this->getPathLogo());
        $this->model->set('path_image', $this->getPathImage());
        $this->model->set('code', $this->model->getCodeUnique($wilayahId));

        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    /**
     * Get the value of pathLogo.
     */
    public function getPathLogo()
    {
        return $this->pathLogo;
    }

    /**
     * Set the value of pathLogo.
     *
     * @param mixed $pathLogo
     *
     * @return self
     */
    public function setPathLogo($pathLogo)
    {
        $this->pathLogo = $pathLogo;

        return $this;
    }

    /**
     * Get the value of pathImage.
     */
    public function getPathImage()
    {
        return $this->pathImage;
    }

    /**
     * Set the value of pathImage.
     *
     * @param mixed $pathImage
     *
     * @return self
     */
    public function setPathImage($pathImage)
    {
        $this->pathImage = $pathImage;

        return $this;
    }

    protected function getDataIndex()
    {
        $model = model(MemberFilter::class);

        return [
            'headers' => [
                'name' => lang('crud.name'),
                'wilayah_id' => lang('crud.wilayah_id'),
                'code' => lang('crud.code'),
                'address' => lang('crud.address'),
                'email' => lang('crud.email'),
                'domain' => lang('crud.domain'),
                'telephone' => lang('crud.telephone'),
                'path_logo' => lang('crud.logo'),
                'path_image' => lang('crud.image'),
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
        $model = new MemberModel();

        if (!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
        $dataEdit['state'] = array_combine(MemberModel::$state, MemberModel::$state);

        return $dataEdit;
    }

    private function uploadLogo()
    {
        $this->uploadFile('logo');
    }

    private function uploadImage()
    {
        $this->uploadFile('image');
    }

    private function uploadFile($name)
    {
        $image = $this->request->getFile($name);
        $imageFolder = 'uploads/'.$this->imageFolder;

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH.'public/'.$imageFolder, $newName);

            if ('image' == $name) {
                $this->setPathImage($imageFolder.'/'.$image->getName());
            } else {
                $this->setPathLogo($imageFolder.'/'.$image->getName());
            }
        }
    }

    private function isActivation($id)
    {
        $newState = $this->request->getPost('state');        
        $data = $this->model->find($id);
        if ($data->state == MemberModel::$defaultState) {
            if ($newState == MemberModel::$finalState) {
                return true;
            }
        }

        return false;
    }

    private function sendEmailActivation($id)
    {        
        $data = $this->model->find($id);
        $data->email = 'ahmad.afandi85@gmail.com';
        helper('email');
        $email = emailer(['SMTPCrypto' => setting('Email.SMTPCrypto')]);
        $email->setFrom(setting('Email.fromEmail'), setting('Email.fromName'))
            ->setTo($data->email)
            ->setSubject(lang('Auth.emailActivateSubject'))
            ->setMessage(view($this->getViewPrefix().'email_activation', ['data' => $data]));        
        if($email->send()){
            $this->writeLog('Email berhasil dikirim '.$data->email);
        }else{
            $this->writeLog('Email gagal dikirim '.$email->printDebugger());
        }
    }    
}
