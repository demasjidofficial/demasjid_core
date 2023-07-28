<?php

namespace App\Modules\Settings;

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

        $settingItem = new MenuItem([
            'title'           => 'Aplikasi',
            'url'             => ADMIN_AREA.'/settings/settings',
            'fontAwesomeIcon' => 'fas fa-pen nav-icon',
            // 'permission'      => 'settings.languages.list',
        ]);

        $languagesItem = new MenuItem([
            'title'           => 'Bahasa',
            'url'             => ADMIN_AREA.'/settings/languages',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'settings.languages.list',
        ]);

        $uomItem = new MenuItem([
            'title'           => 'Satuan',
            'url'             => ADMIN_AREA.'/settings/uom',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'settings.uom.list',
        ]);

        $uomcategoryItem = new MenuItem([
            'title'           => 'Kategori Satuan',
            'url'             => ADMIN_AREA.'/settings/uom_category',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'settings.languages.list',
        ]);        
        
        $sidebar->menu('sidebar')->collection('settings')
                ->addItem($settingItem)
                ->addItem($languagesItem)
                ->addItem($uomItem)
                ->addItem($uomcategoryItem);
    }
}
