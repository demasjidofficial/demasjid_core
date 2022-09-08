<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Api\Models\SitemenusModel;
use App\Modules\Api\Models\SitefooterModel;
use App\Modules\Api\Models\BmdonationcampaignModel;

class Home extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */


    public function index($slug_page = null)
    {
        helper(['form','number','app']);
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity','entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();

        $isPage = false;
        $page_data =   [
            "meta_title" => 'De Masjid | ' .$profile['address'],
            "meta_desc" => 'De Masjid | '. $profile['address'],
            "path_image" => $profile['path_logo']
        ];

        if (isset($slug_page)) {
            $page = model('App\Modules\Api\Models\SitepagesModel', false)->asArray()->findByslug($slug_page);
            if (isset($page) && count($page)) {
                $page_data = $page[0];
                $isPage = true;
                // load section of that page
                $data['sections'] = model('App\Modules\Api\Models\SitesectionsModel', false)->asArray()->findAllByPagerelease($page[0]['id']);
                // load slider of that page
                $data['sliders'] = model('App\Modules\Api\Models\SiteslidersModel', false)->asArray()->findAllByPagerelease($page[0]['id']);
                
            }
        }
        $this->setupWidgets();
        $this->setWidgetCounter();
        $this->setWidgetService();
        
        $masjid_profile = $profile;
        // get data of masjid socials
        $masjid_socials = (new SitesocialsModel())->asArray()->findAllRelease();
        
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

        // get data of menus // default indonesia = 1
        $nav_menu = $this->constructMenu((new SitemenusModel())->asArray()->findAllRelease(1));

        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->findAll();
        
        // get data of footer
        $footer = (new SitefooterModel())->asArray()->findAll();

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['masjid_socials'] = $masjid_socials;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['languages'] = $languages;
        $data['nav_menu'] = $nav_menu;
        $data['widgets'] = service('widgets'); 
        $data['footer'] = $footer; 
        $data['page'] = $page_data; 
        $data['meta'] = meta_tag($masjid_profile["name"], $page_data);  
        
        // render view
        // jika page dan home
        if ($isPage) return $this->render('App\Modules\Website\Views\page', $data);
        else {
            // to keep in home view but scroll to donation section
            $data['nav_header_donation'] = '#donasi';
            return $this->render('website_home', $data);
        }
    }

    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'counter');
        $widgets->widget('counter')
            ->createCollection('counter')
        ;

        $widgets->createWidget(Stats::class, 'service');
        $widgets->widget('service')
            ->createCollection('items')
        ;
    }

    private function setWidgetCounter()
    {
        $widgets = service('widgets');        
        $programItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Program',
            'value' => 1200,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $donasiItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Donasi',
            'value' => 80,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);
        
        $salurDonasiItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Donasi tersalurkan',
            'value' => 3390,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $santriItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Santri',
            'value' => 2877,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $widgets->widget('counter')->collection('counter')
            ->addItem($programItem)
            ->addItem($donasiItem)
            ->addItem($salurDonasiItem)
            ->addItem($santriItem);
    }

    private function setWidgetService()
    {
        $widgets = service('widgets');        
        $zakatItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Zakat',
            'value' => "Layanan penyaluran zakat secara syar'i berbasis teknologi memudahkan jamaah sekitar masjid dalam melaksanakan zakat, meliputi Zakat Fitrah, Zakat Mal, dst.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-null-1',
        ]);

        $infaqItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Infaq & Shodaqoh',
            'value' => "Layanan penyaluran, pengelolaan infaq & shodaqoh secara syar'i berbasis teknologi yang memudahkan jamaah sekitar masjid dalam pelaksanaan dan operasionalnya sehingga bisa tepat guna serta mencapai ridlo Alloh bersama-sama.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-think',
        ]);
        
        $wakafItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Wakaf',
            'value' => "Layanan penyaluran, pengelolaan, pemberdayaan wakaf dari para jamaah sekitar masjid berbasis teknologi sehingga mendapatkan manfaat bersama atas wakaf itu secara syar'i.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-gear',
        ]);
        
        $widgets->widget('service')->collection('items')
            ->addItem($zakatItem)
            ->addItem($infaqItem)
            ->addItem($wakafItem);
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

    /*
    public function donasi($data = null)
    {
        return $this->render('App\Modules\Website\Views\donasi', $data);

        //return 'donasi';
    }
    
    public function pesantren()
    {
        $request = $this->request->getGet('req');
        $data = [];

        if ($request == 'pendaftaran') {
            return $this->render('App\Modules\Pesantren\Views\website\pendaftaran', $data);
        }
        if ($request == 'pengumuman') {
            return $this->render('App\Modules\Pesantren\Views\website\pengumuman', $data);
        }
        return null;
    }

    public function tpq($data = null)
    {
        $request = $this->request->getGet('req');
        $data = [];

        if ($request == 'pendaftaran') {
            return $this->render('App\Modules\TPQ\Views\website\pendaftaran', $data);
        }
        if ($request == 'pengumuman') {
            return $this->render('App\Modules\TPQ\Views\website\pengumuman', $data);
        }
        return null;
    }
    */
}
