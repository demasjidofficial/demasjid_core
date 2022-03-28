<?php

namespace App\Modules\Board;

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
        $boardnewsItem = new MenuItem([
            'title'           => 'Berita',
            'url'             => url_to('App\Modules\Board\Controllers\BoardnewsController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $boardtempItem = new MenuItem([
            'title'           => 'Temperatur',
            'url'             => url_to('App\Modules\Board\Controllers\BoardtemperatureController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $boarddonationItem = new MenuItem([
            'title'           => 'Donasi',
            'url'             => url_to('App\Modules\Board\Controllers\BoarddonationController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        $sidebar->menu('sidebar')->collection('board')
                ->addItem($boardnewsItem)
                ->addItem($boardtempItem)
                ->addItem($boarddonationItem);
    }
}
