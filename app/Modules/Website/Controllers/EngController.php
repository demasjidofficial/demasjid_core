<?php

namespace App\Controllers;

class EngController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    protected $lang = "en";

    public function index()
    {
        return $this->render('page_donasi');
    }
}
