<?php

namespace App\Modules\Website;

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
        $sitemenusItem = new MenuItem([
            'title'           => 'Menu',
            'url'             => url_to('App\Modules\Website\Controllers\SitemenusController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'website.sitemenus.list',
        ]);
        $sitepagesItem = new MenuItem([
            'title'           => 'Halaman',
            'url'             => url_to('App\Modules\Website\Controllers\SitepagesController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'website.sitepages.list',
        ]);
        $sitepostsItem = new MenuItem([
            'title'           => 'Pos',
            'url'             => url_to('App\Modules\Website\Controllers\SitepostsController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'website.siteposts.list',
        ]);
        $sitesectionsItem = new MenuItem([
            'title'           => 'Section',
            'url'             => url_to('App\Modules\Website\Controllers\SitesectionsController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            'permission'      => 'website.sitesections.list',
        ]);
        $sidebar->menu('sidebar')->collection('website')->addItem($sitemenusItem)->addItem($sitepagesItem)->addItem($sitepostsItem)->addItem($sitesectionsItem);
    }
}
