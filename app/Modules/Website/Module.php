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
            'title'           => lang('app.menus'),
            'url'             => url_to('App\Modules\Website\Controllers\SitemenusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.menus.list',
        ]);
        $sitepagesItem = new MenuItem([
            'title'           => lang('app.pages'),
            'url'             => url_to('App\Modules\Website\Controllers\SitepagesController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.pages.list',
        ]);
        $sitepostsItem = new MenuItem([
            'title'           => lang('app.posts'),
            'url'             => url_to('App\Modules\Website\Controllers\SitepostsController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.posts.list',
        ]);
        $sitesectionsItem = new MenuItem([
            'title'           => lang('app.sections'),
            'url'             => url_to('App\Modules\Website\Controllers\SitesectionsController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.sections.list',
        ]);
        $siteslidersItem = new MenuItem([
            'title'           => lang('app.slides'),
            'url'             => url_to('App\Modules\Website\Controllers\SiteslidersController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'website.sliders.list',
        ]);
        $sitesocialsItem = new MenuItem([
            'title'           => lang('app.socials'),
            'url'             => url_to('App\Modules\Website\Controllers\SitesocialsController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.socials.list',
        ]);
        $sitefooterItem = new MenuItem([
            'title'           => lang('app.footer'),
            'url'             => url_to('App\Modules\Website\Controllers\SitefooterController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            // 'permission'      => 'website.socials.list',
        ]);
        $visitsiteItem = new MenuItem([
            'title'           => lang('app.visit_site'),
            'url'             => site_url(),
            'fontAwesomeIcon' => 'fas fa-link nav-icon',
            //'permission'      => 'website.socials.list',
        ]);
        $sidebar->menu('sidebar')->collection('website')
                                 ->addItem($sitemenusItem)
                                 ->addItem($sitepagesItem)
                                 ->addItem($sitepostsItem)
                                 ->addItem($sitesectionsItem)
                                 ->addItem($siteslidersItem)
                                 ->addItem($sitesocialsItem)
                                 ->addItem($sitefooterItem)
                                 ->addItem($visitsiteItem);
    }
}
