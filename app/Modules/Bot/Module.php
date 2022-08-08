<?php

namespace App\Modules\Bot;

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
        $botWhatsappItem = new MenuItem([
            'title'           => 'Whatsapp',
            'url'             => url_to('App\Modules\Bot\Controllers\BotwaController::index'),
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $botTelegramItem = new MenuItem([
            'title'           => 'Telegram',
            'url'             => url_to('App\Modules\Bot\Controllers\BottelegramController::index'),
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $botEmailItem = new MenuItem([
            'title'           => 'Email',
            'url'             => url_to('App\Modules\Bot\Controllers\BotemailController::index'),
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        // $sidebar->menu('sidebar')->collection('bot')
        //         ->addItem($botWhatsappItem)
        //         ->addItem($botTelegramItem)
        //         ->addItem($botEmailItem);
    }
}
