<?php

namespace App\Traits;

use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\LanguagesModel;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Api\Models\SitemenusModel;
use App\Modules\Api\Models\SitefooterModel;

trait SiteProfile {
    protected function siteHeaderFooter() {
        // get data of masjid socials
        $masjid_socials = (new SitesocialsModel())->asArray()->findAllRelease();
        
        // get data of activated languages
        $languages = (new LanguagesModel())->asArray()->findAll();

        // get data of menus // default indonesia = 1
        $nav_menu = $this->constructMenu((new SitemenusModel())->asArray()->findAllRelease(1));

        // get data of footer
        $footer = (new SitefooterModel())->asArray()->findAll();

        $data['languages'] = $languages;
        $data['nav_menu'] = $nav_menu;
        $data['masjid_socials'] = $masjid_socials;
        $data['footer'] = $footer; 
        return $data;
    }

    protected function siteWidgets()
    {        
        $this->setupWidgets();
        $this->setWidgetCounter();
        $this->setWidgetService();
    }

    function setupWidgets()
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

    function setWidgetCounter()
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

    function setWidgetService()
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
}