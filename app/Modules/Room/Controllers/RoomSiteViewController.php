<?php

namespace App\Modules\Room\Controllers;

use App\Controllers\BaseController;

class RoomSiteViewController extends BaseController
{
    public function index()
    {
        return $this->render('App\Modules\Room\Views\roomSiteView\index');
    }
}
