<?php

namespace App\Controllers;

use App\Traits\UploadedFile;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


class Activation extends BaseController
{
    protected $theme = 'Auth';

    use UploadedFile;
    protected $modelName = 'App\Modules\Api\Models\MemberModel';
    private $pathLogo;
    private $pathImage;
    private $imageFolder = 'images';
    private $model;

    public function index()
    {
        helper('form');

        return $this->render('activation/index');
    }

    public function create()
    {
        $this->model = model($this->modelName);
        $data = $this->request->getPost();
        $wilayahId = $this->request->getPost('wilayah_id');
        $this->uploadLogo();
        $this->uploadImage();
        $this->model->set('path_logo', $this->getPathLogo());
        $this->model->set('path_image', $this->getPathImage());
        $codeUnique = $this->model->getCodeUnique($wilayahId);
        $this->model->set('code', $codeUnique);
        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        
        return redirect()->to('qrcode?'.http_build_query(['code' => $codeUnique, 'name' => $data['name']]));
    }

    public function qrcode()
    {
        $code = $this->request->getGet('code');
        $name = $this->request->getGet('name') ?? 'Demasjid';
        $writer = new PngWriter();
        $qrCode = QrCode::create($code)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255))
        ;

        // Create generic logo
        $pathLogo = ROOTPATH.'themes/App/theme-charityworks/img/logo/loder.png';
        $logo = Logo::create($pathLogo)
            //->setPunchoutBackground(true)
            ->setResizeToWidth(100);

        // Create generic label
        $label = Label::create($name)
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);
        return $this->render('activation/qrcode', ['dataUri' => $result->getDataUri()]);
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

    private function uploadLogo()
    {
        $uploaded = $this->uploadFile('logo');
        if ($uploaded) {
            $this->setPathLogo($uploaded);
        }
    }

    private function uploadImage()
    {
        $uploaded = $this->uploadFile('image');
        if ($uploaded) {
            $this->setPathImage($uploaded);
        }
    }
}
