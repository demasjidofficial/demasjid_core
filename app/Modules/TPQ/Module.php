<?php

namespace App\Modules\TPQ;

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

        $pengurusItem = new MenuItem([
            'title'           => 'Pengurus',
            'url'             => url_to('App\Modules\TPQ\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-user nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => 'Profile',
            'url'             => url_to('App\Modules\TPQ\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-users nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);

        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => 'Master Kas',
            'url'             => url_to('App\Modules\TPQ\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.account_balance.list',
        ]);
        $balanceItem = new MenuItem([
            'title'           => 'Kas',
            'url'             => url_to('App\Modules\TPQ\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-list nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);
        
        $sidebar->menu('sidebar')->collection('tpq')
            ->addItem($pengurusItem)
            ->addItem($profileItem)
            ->addItem($accountBalanceItem)
            ->addItem($balanceItem);
    }
}
