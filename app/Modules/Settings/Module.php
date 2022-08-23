<?php

namespace App\Modules\Settings;

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

        $languagesItem = new MenuItem([
            'title'           => 'Bahasa',
            'url'             => url_to('App\Modules\Settings\Controllers\LanguagesController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'settings.languages.list',
        ]);

        $uomItem = new MenuItem([
            'title'           => 'Satuan',
            'url'             => url_to('App\Modules\Settings\Controllers\UomController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'settings.languages.list',
        ]);

        $uomcategoryItem = new MenuItem([
            'title'           => 'Kategori Satuan',
            'url'             => url_to('App\Modules\Settings\Controllers\UomCategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'settings.languages.list',
        ]);

        /*    
        $profileItem = new MenuItem([
            'title'           => 'Profil',
            'url'             => url_to('App\Modules\TPQ\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
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
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);
        */

        $sidebar->menu('sidebar')->collection('settings')
                ->addItem($languagesItem)
                ->addItem($uomItem)
                ->addItem($uomcategoryItem);
    }
}
