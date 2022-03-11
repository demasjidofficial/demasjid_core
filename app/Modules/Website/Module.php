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
            'permission'      => 'website.menus.list',
        ]);
        $sitepagesItem = new MenuItem([
            'title'           => 'Halaman',
            'url'             => url_to('App\Modules\Website\Controllers\SitepagesController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'website.pages.list',
        ]);
        $sitepostsItem = new MenuItem([
            'title'           => 'Posting',
            'url'             => url_to('App\Modules\Website\Controllers\SitepostsController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'website.posts.list',
        ]);
        $sitesectionsItem = new MenuItem([
            'title'           => 'Section',
            'url'             => url_to('App\Modules\Website\Controllers\SitesectionsController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            'permission'      => 'website.sections.list',
        ]);
        $siteslidersItem = new MenuItem([
            'title'           => 'Slide',
            'url'             => url_to('App\Modules\Website\Controllers\SiteslidersController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            //'permission'      => 'website.sliders.list',
        ]);
        $sitesocialsItem = new MenuItem([
            'title'           => 'Sosial Media',
            'url'             => url_to('App\Modules\Website\Controllers\SitesocialsController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            'permission'      => 'website.socials.list',
        ]);
        $sidebar->menu('sidebar')->collection('website')
                                 ->addItem($sitemenusItem)
                                 ->addItem($sitepagesItem)
                                 ->addItem($sitepostsItem)
                                 ->addItem($sitesectionsItem)
                                 ->addItem($siteslidersItem)
                                 ->addItem($sitesocialsItem);
    }
}
