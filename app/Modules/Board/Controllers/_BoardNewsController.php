<?php

namespace App\Modules\Board\Controllers;

use App\Controllers\AdminCrudController;

class _BoardNewsController extends AdminCrudController
{
    public function index(){
        return $this->render('App\Modules\Board\Views\_submodules\_boardnews'); 
    }
}
