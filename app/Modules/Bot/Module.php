<?php

namespace App\Modules\Bot;

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
        $botWhatsappItem = new MenuItem([
            'title'           => 'Whatsapp',
            'url'             => ADMIN_AREA.'/bot/easywa',
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.donationtype.list',
        ]);
        $botTelegramItem = new MenuItem([
            'title'           => 'Telegram',
            'url'             => ADMIN_AREA.'/bot/telegram',
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqoh.list',
        ]);
        $botEmailItem = new MenuItem([
            'title'           => 'Email',
            'url'             => ADMIN_AREA.'/bot/email',
            'fontAwesomeIcon' => 'fas fa-envelope nav-icon',
            //'permission'      => 'baitulmal.infaqshodaqohcategory.list',
        ]);

        $sidebar->menu('sidebar')->createCollection('bot', 'Bot')
                ->setFontAwesomeIcon('fas fa-cog')
                ->setCollapsible();
        $sidebar->menu('sidebar')->collection('bot')
                ->addItem($botWhatsappItem)
                ->addItem($botTelegramItem)
                ->addItem($botEmailItem);

    }
}
