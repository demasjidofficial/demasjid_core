<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    public function index()
    {
        return $this->render('website_home');
    }

    public function p()
    {
        return $this->render('page_donasi');
    }

    public function b()
    {
        return $this->render('website_home');
    }
}
