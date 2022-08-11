<?php

namespace App\Modules\Ruangan;

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

        $roomItem = new MenuItem([
            'title'           => lang('crud.room'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $konfirmruanganItem = new MenuItem([
            'title'           => lang('crud.konfirmruangan'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $comentItem = new MenuItem([
            'title'           => lang('crud.coment'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $rekaplaporanItem = new MenuItem([
            'title'           => lang('crud.rekaplaporan'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $sidebar->menu('sidebar')->collection('room')
            ->addItem($roomItem)
            ->addItem($konfirmruanganItem)
            ->addItem($comentItem)
            ->addItem($rekaplaporanItem);
    }
}
