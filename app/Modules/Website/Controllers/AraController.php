<?php

namespace App\Controllers;

class AraController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    protected $lang = "ar";

    public function index()
    {
        return $this->render('page_donasi');
    }
}
