<?php

namespace App\Modules\Pesantren;

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
            'title'           => lang('crud.pengurus'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);
        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.account_balance'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ChartOfAccountController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.balance.list',
        ]);
        $kelas = new MenuItem([
            'title'           => lang('crud.class'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\KelasController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);
        $sidebar->menu('sidebar')->collection('pesantren')
            ->addItem($pengurusItem)
            ->addItem($profileItem)
            ->addItem($accountBalanceItem)
            ->addItem($balanceItem)
            ->addItem($chartOfAccoutItem)
            ->addItem($kelas);
          
    }
}
