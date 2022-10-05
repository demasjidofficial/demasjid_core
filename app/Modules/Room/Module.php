<?php

namespace App\Modules\Room;

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
            'url'             => url_to('App\Modules\Room\Controllers\RoomController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $konfirmruanganItem = new MenuItem([
            'title'           => lang('crud.reservruangan'),
            'url'             => url_to('App\Modules\Room\Controllers\RoomReservationController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $comentItem = new MenuItem([
            'title'           => lang('crud.infaq_room'),
            'url'             => url_to('App\Modules\Room\Controllers\CommentRoomController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $rekaplaporanItem = new MenuItem([
            'title'           => lang('crud.summary'),
            'url'             => url_to('/'),
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
