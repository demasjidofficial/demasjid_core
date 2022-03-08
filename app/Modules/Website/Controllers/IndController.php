<?php

namespace App\Controllers;

class IndController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    protected $lang = "id";

    public function index()
    {
        return $this->render('page_donasi');
    }
}
