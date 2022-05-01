<?php

namespace App\Modules\Masjid\Controllers;

class TarawihScheduleController extends NonRawatibScheduleController
{
    protected $baseController = __CLASS__;
    protected $baseRoute = 'admin/masjid/tarawihschedule';
    protected $typeSholat = 'tarawih';

    public function create(){
        $this->model->set('type_sholat', $this->typeSholat);
        return parent::create();
    }
}
