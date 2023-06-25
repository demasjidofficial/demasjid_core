<?php

namespace App\Modules\Masjid\Controllers;

class IedScheduleController extends NonRawatibScheduleController
{
    protected $baseController = '\\'.__CLASS__;
    protected $baseRoute = ADMIN_AREA.'/masjid/iedschedule';
    protected $typeSholat = 'ied';

    public function create(){
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
