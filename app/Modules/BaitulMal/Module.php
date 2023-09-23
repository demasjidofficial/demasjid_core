<?php

namespace App\Modules\BaitulMal;

use App\Config\BaseModule;
use Bonfire\Menus\MenuItem;

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
            'url'             => ADMIN_AREA.'/baitulmal/donationtype',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $zakatmalItem = new MenuItem([
            'title'           => 'Zakat Mal',
            'url'             => ADMIN_AREA.'/baitulmal/donationtype',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $shodaqohItem = new MenuItem([
            'title'           => 'Shodaqoh',
            'url'             => ADMIN_AREA.'/baitulmal/donationtype',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.donationtype.list',
        ]);
        $donationTypeItem = new MenuItem([
            'title'           => 'Tipe Donasi',
            'url'             => ADMIN_AREA.'/baitulmal/donationtype',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           // 'permission'      => 'baitulmal.donationtype.list',
        ]);
        $infaqItem = new MenuItem([
            'title'           => 'Infaq',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqoh',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $infaqtypeItem = new MenuItem([
            'title'           => 'Tipe Infaq',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqohcategory',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $wakafItem = new MenuItem([
            'title'           => 'Wakaf',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqohcategory',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $qurbanItem = new MenuItem([
            'title'           => 'Qurban',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqohcategory',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $donasiItem = new MenuItem([
            'title'           => 'Donasi',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqohcategory',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $masterItem = new MenuItem([
            'title'           => 'Master',
            'url'             => ADMIN_AREA.'/baitulmal/infaqshodaqohcategory',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
           'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        /**
         * SUB MODULE
         */
        // $campaignsItem = new MenuItem([
        //     'title'           => lang('crud.campaigns'),
        //     'url'             => ADMIN_AREA.'/baitulmal/_Campaigns',
        //     'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
        //    'permission'      => 'baitulmal.zakats.list',
        // ]);
        $zakatsItem = new MenuItem([
            'title'           => lang('crud.zakats'),
            'url'             => ADMIN_AREA.'/baitulmal/_Zakats',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.zakats.list',
        ]);
        $infaqsItem = new MenuItem([
            'title'           => lang('crud.infaqs'),
            'url'             => ADMIN_AREA.'/baitulmal/_Infaqs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.infaqs.list',
        ]);
        $shodaqohsItem = new MenuItem([
            'title'           => lang('crud.shodaqohs'),
            'url'             => ADMIN_AREA.'/baitulmal/_Shodaqohs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.shodaqohs.list',
        ]);
        $wakafsItem = new MenuItem([
            'title'           => lang('crud.wakafs'),
            'url'             => ADMIN_AREA.'/baitulmal/_Wakafs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.wakafs.list',
        ]);
        $qurbansItem = new MenuItem([
            'title'           => lang('crud.qurbans'),
            'url'             => ADMIN_AREA.'/baitulmal/_Qurbans',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.qurbans.list',
        ]);
        $donasisItem = new MenuItem([
            'title'           => lang('crud.donasis'),
            'url'             => ADMIN_AREA.'/baitulmal/donationcampaign',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
        //    'permission'      => 'baitulmal.qurbans.list',
        ]);

        $fundraisingManagerItem = new MenuItem([
            'title'           => 'Fundraising Manager',
            'url'             => ADMIN_AREA.'/baitulmal/OverviewManager',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           //'permission'        => 'baitulmal.manager_fundraising.list',

        ]);


        $fundraisingSpvItem = new MenuItem([
            'title'           => 'Fundraising',
            'url'             => ADMIN_AREA.'/baitulmal/OverviewSpv',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'        => 'baitulmal.supervisor_fundraising.list',
        ]);

        $fundraisingStaffItem = new MenuItem([
            'title'           => 'Fundraising',
            'url'             => ADMIN_AREA.'/baitulmal/OverviewTim',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'        => 'baitulmal.staf_fundraising.list',
        ]);

        $masterBaitulMalsItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => ADMIN_AREA.'/baitulmal/Master',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.qurbans.list',
        ]);
        $configsItem = new MenuItem([
            'title'           => lang('crud.configs'),
            'url'             => ADMIN_AREA.'/baitulmal/_Configs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
           'permission'      => 'baitulmal.configs.list',
        ]);

        // $sidebar->menu('sidebar')->createCollection('baitulmal', 'Baitul Mal')
        //             ->setFontAwesomeIcon('fas fa-money')
        //             ->setCollapsible();
        // $sidebar->menu('sidebar')->collection('baitulmal')
        //         ->addItem($donationTypeItem)
        //         ->addItem($donasisItem)
        //         ->addItem($zakatsItem)
        //         ->addItem($infaqsItem)
        //         ->addItem($masterBaitulMalsItem)
        //         ->addItem($fundraisingManagerItem)
        //         ->addItem($fundraisingSpvItem)
        //         ->addItem($fundraisingStaffItem)
        //         ->addItem($wakafsItem)
        //         ->addItem($qurbansItem)
        //         ->addItem($configsItem);
    }
}
