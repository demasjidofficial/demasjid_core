<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\MemberModel;
use App\Modules\Api\Models\WilayahModel;
use App\Modules\Masjid\Libraries\Generator;
use App\Modules\Masjid\Models\MemberFilter;

class MemberController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\member\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/member';
    protected $langModel = 'member';
    protected $modelName = 'App\Modules\Api\Models\MemberModel';
    private $pathLogo;
    private $pathImage;
    

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
        if($isActivation) {
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
        $dataModel = $model->paginate(setting('App.perPage'));
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'wilayah_id' => lang('crud.wilayah_id'),
                'kota' => 'Kota',
                'kecamatan' => 'Kecamatan',
                'desa' => 'Desa',
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
            'wilayahMap' => $this->getWilayah($dataModel),
            'data' => $dataModel,
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
            $wilayah = collect((new WilayahModel())->extractWilayah($data->wilayah_id)->asArray()->findAll())->keyBy('kode');
            $extractWilayah = extractWilayah($data->wilayah_id);
            $data->desa = $wilayah[$extractWilayah['desa']]['nama'] ?? '';
            $data->kota = $wilayah[$extractWilayah['kota/kabupaten']]['nama'] ?? '';
            $data->kecamatan = $wilayah[$extractWilayah['kecamatan']]['nama'] ?? '';
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
        // $data->email = 'ahmad.afandi85@gmail.com';
        $this->generateDomainFolder($data);
        $this->copyAssetImage($data);
        helper('email');
        $email = emailer(['SMTPCrypto' => setting('Email.SMTPCrypto')]);
        $email->setFrom(setting('Email.fromEmail'), setting('Email.fromName'))
            ->setTo($data->email)
            ->setSubject(lang('crud.activation_user').' Demasjid')
            ->setMessage(view($this->getViewPrefix().'email_activation', ['data' => $data]));
        if($email->send()) {
            log_message('critical', 'Email berhasil dikirim '.$data->email);
        } else {
            log_message('critical', 'Email gagal dikirim '.$email->printDebugger());
        }
    }

    private function executeShell($id)
    {
        $data = $this->model->find($id);
        $password = service('passwords')->hash($data->password);
        shell_exec("init_db {$id} {$password}");
    }

    private function generateDomainFolder($data)
    {
        $domainName = $data->domain;
        $domainFolder = $data->code;
        helper('filesystem');
        $original = env('domain.template.source').'template';
        $target = env('domain.template.destination').$domainFolder;
        try {
            directory_mirror($original, $target, false);
            $envPathFile = $target.DIRECTORY_SEPARATOR.'.env';
            $hostPathFile = $target.DIRECTORY_SEPARATOR.$domainFolder.'.conf';
            $generator = new Generator($envPathFile, $hostPathFile, $domainName, $domainFolder);
            $generator->env();
            $generator->config();
            $password = service('passwords')->hash($data->code);
            $generator->database($data->id, $password);
        } catch (\Throwable $th) {
            log_message('critical', 'Failed generate domain folder '.$th->getMessage());
        }
    }

    private function getWilayah($dataModel)
    {
        $listwilayah = [];
        foreach($dataModel as $d) {
            $listwilayah = array_merge($listwilayah, array_values(extractWilayah($d->wilayah_id)));
        }

        $wilayah = empty($listwilayah) ? collect() : collect((new WilayahModel())->whereIn('kode', array_unique($listwilayah))->asArray()->findAll())->keyBy('kode');

        return $wilayah;
    }

    private function copyAssetImage($data)
    {
        $domainFolder = $data->code;
        $target = env('domain.template.destination').$domainFolder;
        copy($data->path_logo, $target.DIRECTORY_SEPARATOR.$data->path_logo);
        copy($data->path_image, $target.DIRECTORY_SEPARATOR.$data->path_image);
    }
}
