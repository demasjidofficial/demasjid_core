<?php

namespace App\Modules\Masjid\Controllers;

class GerhanaScheduleController extends NonRawatibScheduleController
{
    protected $baseController = '\\'.__CLASS__;
    protected $baseRoute = ADMIN_AREA.'/masjid/gerhanaschedule';
    protected $typeSholat = 'gerhana';

    public function create()
    {
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
