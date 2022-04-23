<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;

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
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();
        $masjid_profile = $profile;
        
        // get data of masjid socials
        $masjid_socials = [
            [
                'id' => 1,
                'name' => 'Facebook',
                'link' => 'https://facebook.com/masjidalfurqonsby',
                'path_icon' => 'fab fa-facebook-f',
            ],
            [
                'id' => 2,
                'name' => 'Instagram',
                'link' => 'https://instagram.com/masjidalfurqonsby',
                'path_icon' => 'fab fa-instagram',
            ],
        ];

        // get data of activated languages
        $languages = [
            [
                'id' => 1,
                'code' => 'ID',
                'name' => 'indonesia',
                'path_icon' => '',
            ],
            [
                'id' => 2,
                'code' => 'SA',
                'name' => 'arab',
                'path_icon' => '',
            ],
            [
                'id' => 3,
                'code' => 'EN',
                'name' => 'english',
                'path_icon' => '',
            ],
        ];
        
        // get data of navigation menu
        $nav_menu = [
            [
                'id' => 1,
                'name' => 'home',
                'label' => 'Beranda',
                'parent' => 0,
            ],
            [
                'id' => 2,
                'name' => 'about',
                'label' => 'Tentang',
                'parent' => 0,
            ],
        ];
        
        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['masjid_socials'] = $masjid_socials;
        $data['languages'] = $languages;
        $data['nav_menu'] = $nav_menu;
        
        // render view
        return $this->render('website_home', $data);
    }

    /**
     * Method for Pages Feature
     */
    public function p()
    {
        $permalink = $this->request->getGet('pl');
        $content = '';

        if (str_contains($permalink, 'donasi')) {
            //return $this->donasi();
        }    
        
        $data['pl'] = $permalink;
        $data['content'] = $content;

        return $this->render('App\Modules\Website\Views\page', $data);
    }

    /**
     * Method for Posts/Blogs Feature
     */
    private function b()
    {
        $permalink = $this->request->getGet('pl');
        return $permalink;
    }

    private function ws()
    {
        return 'ws';
    }

    private function donasi($data = null)
    {
        return 'donasi';
    }
    
}
