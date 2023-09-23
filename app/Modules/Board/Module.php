<?php

namespace App\Modules\Board;

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
        $boardnewsItem = new MenuItem([
            'title'           => lang('app.board_news'),
            'url'             => ADMIN_AREA.'/board/News',
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $boardtempItem = new MenuItem([
            'title'           => lang('app.board_temperature'),
            'url'             => ADMIN_AREA.'/board/temperature',
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $boarddonationItem = new MenuItem([
            'title'           => lang('app.board_donation'),
            'url'             => ADMIN_AREA.'/board/donation',
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $boardlivebroadcastItem = new MenuItem([
            'title'           => lang('app.board_livebroadcast'),
            'url'             => ADMIN_AREA.'/board/livebroadcast',
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);
        $boardkonfigurasiItem = new MenuItem([
            'title'           => lang('app.board_konfigurasi'),
            'url'             => ADMIN_AREA.'/board/Configs',
            'fontAwesomeIcon' => 'fas fa-bullhorn nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);


        // $sidebar->menu('sidebar')->createCollection('board', 'Board')
        //             ->setFontAwesomeIcon('fas fa-cog')
        //             ->setCollapsible();
        // $sidebar->menu('sidebar')->collection('board')
        //         ->addItem($boardnewsItem)
        //         ->addItem($boardtempItem)
        //         ->addItem($boarddonationItem)

        //         ->addItem($boardlivebroadcastItem)
        //         ->addItem($boardkonfigurasiItem);


    }
}
