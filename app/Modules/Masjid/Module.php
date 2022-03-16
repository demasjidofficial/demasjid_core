<?php

namespace App\Modules\Masjid;

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
        $pengurusItem = new MenuItem([
            'title'           => 'Pengurus',
            'url'             => url_to('App\Modules\Masjid\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-users nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);
        $jabatanItem = new MenuItem([
            'title'           => 'Jabatan',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            'fontAwesomeIcon' => 'fas fa-users nav-icon',
            //'permission'      => 'masjid.jabatan.list',
        ]);
        $memberItem = new MenuItem([
            'title'           => 'Member',
            'url'             => url_to('App\Modules\Masjid\Controllers\MemberController::index'),
            'fontAwesomeIcon' => 'fas fa-users nav-icon',
            //'permission'      => 'masjid.member.list',
        ]);
        $wilayahItem = new MenuItem([
            'title'           => 'Wilayah',
            'url'             => url_to('App\Modules\Masjid\Controllers\WilayahController::index'),
            'fontAwesomeIcon' => 'fas fa-map nav-icon',
            //'permission'      => 'masjid.wilayah.list',
        ]);

        $entityItem = new MenuItem([
            'title'           => 'Entitas',
            'url'             => url_to('App\Modules\Masjid\Controllers\EntityController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.entity.list',
        ]);

        $accountBalanceItem = new MenuItem([
            'title'           => 'Master Kas',
            'url'             => url_to('App\Modules\Masjid\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);
        $balanceItem = new MenuItem([
            'title'           => 'Kas',
            'url'             => url_to('App\Modules\Masjid\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.balance.list',
        ]);
        $sidebar->menu('sidebar')->collection('masjid')
            ->addItem($jabatanItem)
            ->addItem($pengurusItem)
            ->addItem($memberItem)
            ->addItem($wilayahItem)
            ->addItem($entityItem)
            ->addItem($accountBalanceItem)
            ->addItem($balanceItem);
    }
}
