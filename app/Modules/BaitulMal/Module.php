<?php

namespace App\Modules\BaitulMal;

use App\Config\BaseModule;
use Bonfire\Libraries\Menus\MenuItem;

/**
 * Pengurus Module setup.
 */
class Module extends BaseModule
{
    /**
     * Setup our admin area needs.
     */
    public function initAdmin()
    {
        helper('url');
        // Settings menu for sidebar
        $sidebar = service('menus');

        // Content Menu for sidebar
        $zakatfitrahItem = new MenuItem([
            'title'           => 'Zakat Fitrah',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $zakatmalItem = new MenuItem([
            'title'           => 'Zakat Mal',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $shodaqohItem = new MenuItem([
            'title'           => 'Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $shodaqohtypeItem = new MenuItem([
            'title'           => 'Tipe Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $infaqItem = new MenuItem([
            'title'           => 'Infaq',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $infaqtypeItem = new MenuItem([
            'title'           => 'Tipe Infaq',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $wakafItem = new MenuItem([
            'title'           => 'Wakaf',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $qurbanItem = new MenuItem([
            'title'           => 'Qurban',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $donasiItem = new MenuItem([
            'title'           => 'Donasi',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $masterItem = new MenuItem([
            'title'           => 'Master',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        /**
         * SUB MODULE
         */
        // $campaignsItem = new MenuItem([
        //     'title'           => lang('crud.campaigns'),
        //     'url'             => url_to('App\Modules\BaitulMal\Controllers\_CampaignsController::index'),
        //     'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
        //    'permission'      => 'baitulmal.zakats.list',
        // ]);
        $zakatsItem = new MenuItem([
            'title'           => lang('crud.zakats'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_ZakatsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.zakats.list',
        ]);
        $infaqsItem = new MenuItem([
            'title'           => lang('crud.infaqs'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_InfaqsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.infaqs.list',
        ]);
        $shodaqohsItem = new MenuItem([
            'title'           => lang('crud.shodaqohs'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_ShodaqohsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.shodaqohs.list',
        ]);
        $wakafsItem = new MenuItem([
            'title'           => lang('crud.wakafs'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_WakafsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.wakafs.list',
        ]);
        $qurbansItem = new MenuItem([
            'title'           => lang('crud.qurbans'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_QurbansController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.qurbans.list',
        ]);
        $donasisItem = new MenuItem([
            'title'           => lang('crud.donasis'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationcampaignController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
        //    'permission'      => 'baitulmal.qurbans.list',
        ]);

        $fundraisingManagerItem = new MenuItem([
            'title'           => 'Fundraising Manager',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\OverviewManagerController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'        => 'baitulmal.manager_fundraising.list',
        ]);

        
        $fundraisingSpvItem = new MenuItem([
            'title'           => 'Fundraising Supervisor',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\OverviewSpvController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'        => 'baitulmal.supervisor_fundraising.list',
        ]);

        $fundraisingStaffItem = new MenuItem([
            'title'           => 'Fundraising Staff',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\OverviewTimController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'        => 'baitulmal.staf_fundraising.list',
        ]);
      
        $masterBaitulMalsItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\MasterController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.qurbans.list',
        ]);
        $configsItem = new MenuItem([
            'title'           => lang('crud.configs'),
            'url'             => url_to('App\Modules\BaitulMal\Controllers\_ConfigsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.configs.list',
        ]);
        $sidebar->menu('sidebar')->collection('baitulmal')
                //->addItem($zakatfitrahItem)
                //->addItem($zakatmalItem)
                //->addItem($shodaqohItem)
                //->addItem($shodaqohtypeItem)
                //->addItem($infaqItem)
                //->addItem($infaqtypeItem)
                //->addItem($wakafItem)
                //->addItem($qurbanItem)
                //->addItem($campaignsItem)
                ->addItem($donasisItem)
                ->addItem($zakatsItem)
                ->addItem($infaqsItem)
                ->addItem($masterBaitulMalsItem)
                ->addItem($fundraisingManagerItem)
                ->addItem($fundraisingSpvItem)
                ->addItem($fundraisingStaffItem)
                ->addItem($wakafsItem)
                ->addItem($qurbansItem)
                ->addItem($configsItem);
    }
}
