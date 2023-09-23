<?php

namespace App\Modules\Masjid\Controllers;

class JumatScheduleController extends NonRawatibScheduleController
{
    protected $baseController = '\\'.__CLASS__;
    protected $baseRoute = ADMIN_AREA.'/masjid/jumatschedule';
    protected $typeSholat = 'jumat';

    public function create()
    {
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
