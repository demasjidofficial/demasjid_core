<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;

class Home extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */
    public function index($page = null)
    {
        switch($page){
            case 'ws':
                return $this->ws();
                break;
            case 'donasi':
                return $this->donasi();
                break;
            default:
            return $this->render('website_home');    
        }        
    }

    private function ws(){

        return 'ws';
    }

    private function donasi(){
        return 'donasi';
    }
}
