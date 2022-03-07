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
        $profilItem = new MenuItem([
            'title'           => 'Profil',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\ProfilController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'baitulmal.profil.list',
        ]);
        $pengurusItem = new MenuItem([
            'title'           => 'Pengurus',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'baitulmal.pengurus.list',
        ]);
        $infaqshodaqohItem = new MenuItem([
            'title'           => 'Infaq/Shodaqoh',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\infaqshodaqohController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $zakatItem = new MenuItem([
            'title'           => 'Zakat',
            'url'             => url_to('App\Modules\BaitulMal\Controllers\ZakatController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            'permission'      => 'baitulmal.zakat.list',
        ]);
        $sidebar->menu('sidebar')->collection('baitulmal')->addItem($profilItem)->addItem($pengurusItem)->addItem($infaqshodaqohItem)->addItem($zakatItem);
    }
}
