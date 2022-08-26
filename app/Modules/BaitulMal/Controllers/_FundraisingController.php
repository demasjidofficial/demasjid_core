<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;


class _FundraisingController extends AdminCrudController
{
    
    public function index(){
    
        return $this->render('App\Modules\BaitulMal\Views\_submodules\fundraising',[]);
    }

  
}
