<?php

namespace App\Modules\Website\Controllers;

//use App\Controllers\BaseController;

class WsController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    public function index()
    {
        //return $this->render('welcome_message');
        return $this->render('page_donasi');
    }
}
