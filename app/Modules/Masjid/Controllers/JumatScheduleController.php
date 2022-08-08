<?php

namespace App\Modules\Masjid\Controllers;

class JumatScheduleController extends NonRawatibScheduleController
{
    protected $baseController = __CLASS__;
    protected $baseRoute = 'admin/masjid/jumatschedule';
    protected $typeSholat = 'jumat';

    public function create(){
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
