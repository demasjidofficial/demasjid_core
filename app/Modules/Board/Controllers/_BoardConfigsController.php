<?php

namespace App\Modules\Board\Controllers;

use App\Controllers\AdminCrudController;

class _BoardConfigsController extends AdminCrudController
{
    public function index(){
        return $this->render('App\Modules\Board\Views\_submodules\_konfigurasi'); 
    }

}
