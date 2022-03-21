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
        $donationtypeItem = new MenuItem([
            'title'           => 'Tipe Donasi',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BmdonationtypeController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $infaqshodaqohItem = new MenuItem([
            'title'           => 'Infaq/Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $infaqshodaqohcategoryItem = new MenuItem([
            'title'           => 'Kategori Infaq/Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\BminfaqshodaqohcategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        $sidebar->menu('sidebar')->collection('baitulmal')
                ->addItem($donationtypeItem)
                ->addItem($infaqshodaqohItem)
                ->addItem($infaqshodaqohcategoryItem);
    }
}
