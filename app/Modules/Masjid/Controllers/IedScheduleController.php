<?php

namespace App\Modules\Masjid\Controllers;

class IedScheduleController extends NonRawatibScheduleController
{
    protected $baseController = __CLASS__;
    protected $baseRoute = 'admin/masjid/iedschedule';
    protected $typeSholat = 'ied';

    public function create(){
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
