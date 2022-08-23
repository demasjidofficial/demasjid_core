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
            'title'           => lang('app.board_news'),
            'url'             => url_to('App\Modules\Board\Controllers\_BoardNewsController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $boardtempItem = new MenuItem([
            'title'           => lang('app.board_temperature'),
            'url'             => url_to('App\Modules\Board\Controllers\BoardtemperatureController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $boarddonationItem = new MenuItem([
            'title'           => lang('app.board_donation'),
            'url'             => url_to('App\Modules\Board\Controllers\BoarddonationController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $boardlivebroadcastItem = new MenuItem([
            'title'           => lang('app.board_livebroadcast'),
            'url'             => url_to('App\Modules\Board\Controllers\BoardlivebroadcastController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $boardkonfigurasiItem = new MenuItem([
            'title'           => lang('app.board_konfigurasi'),
            'url'             => url_to('App\Modules\Board\Controllers\_BoardConfigsController::index'),
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);


        // $sidebar->menu('sidebar')->collection('board')
        //         ->addItem($boardnewsItem)
        //         ->addItem($boardtempItem)
        //         ->addItem($boarddonationItem)
        //         ->addItem($boardlivebroadcastItem);

        $sidebar->menu('sidebar')->collection('board')
                ->addItem($boardnewsItem)
                ->addItem($boardtempItem)
                ->addItem($boarddonationItem)

                ->addItem($boardlivebroadcastItem)
                ->addItem($boardkonfigurasiItem);

                ->addItem($boardlivebroadcastItem);


    }
}
