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
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $zakatmalItem = new MenuItem([
            'title'           => 'Zakat Mal',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $shodaqohItem = new MenuItem([
            'title'           => 'Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $shodaqohtypeItem = new MenuItem([
            'title'           => 'Tipe Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $infaqItem = new MenuItem([
            'title'           => 'Infaq',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $infaqtypeItem = new MenuItem([
            'title'           => 'Tipe Infaq',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $wakafItem = new MenuItem([
            'title'           => 'Wakaf',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $qurbanItem = new MenuItem([
            'title'           => 'Qurban',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        $sidebar->menu('sidebar')->collection('baitulmal')
                ->addItem($zakatfitrahItem)
                ->addItem($zakatmalItem)
                ->addItem($shodaqohItem)
                ->addItem($shodaqohtypeItem)
                ->addItem($infaqItem)
                ->addItem($infaqtypeItem)
                ->addItem($wakafItem)
                ->addItem($qurbanItem);
    }
}
