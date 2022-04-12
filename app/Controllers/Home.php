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
            case 'p':
                return $this->p();
                break;
            case 'ws':
                return $this->ws();
                break;
            case 'donasi':
                return $this->donasi();
                break;
            case 'b':
                return $this->b();                            
                break;
            default:
                return $this->render('website_home');    
        }        
    }

    /**
     * Method for Pages Feature
     */
    public function p()
    {
        $path = $this->request->getGet('path');
        $data['path'] = $path;
        return $this->render('App\Modules\Website\Views\page', $data);
    }

    /**
     * Method for Posts/Blogs Feature
     */
    private function b()
    {
        $path = $this->request->getGet('path');
        return $path;
    }

    private function ws()
    {
        return 'ws';
    }

    private function donasi()
    {
        return 'donasi';
    }
    
}
