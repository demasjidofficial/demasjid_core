<?php

namespace App\Modules\Room;

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

        $roomItem = new MenuItem([
            'title'           => lang('crud.room'),
            'url'             => ADMIN_AREA.'/room/room',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $reservruanganItem = new MenuItem([
            'title'           => lang('crud.reservruangan'),
            'url'             => ADMIN_AREA.'/room/roomreservation',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $InfaqruanganItem = new MenuItem([
            'title'           => lang('crud.infaq_room'),
            'url'             => ADMIN_AREA.'/room/infaqroom',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $rekaplaporanItem = new MenuItem([
            'title'           => lang('crud.summary'),
            'url'             => ADMIN_AREA.'/room/reportroom',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);
        $sidebar->menu('sidebar')->createCollection('room', 'Room')
                ->setFontAwesomeIcon('fas fa-home')
                ->setCollapsible();
            
        $sidebar->menu('sidebar')->collection('room')
            ->addItem($roomItem)
            ->addItem($reservruanganItem)
            ->addItem($InfaqruanganItem)
            ->addItem($rekaplaporanItem);
    }
}
