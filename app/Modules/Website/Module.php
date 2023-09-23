<?php

namespace App\Modules\Website;

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
        $sitemenusItem = new MenuItem([
            'title'           => lang('app.menus'),
            'url'             => ADMIN_AREA.'/website/menus',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.menus.list',
        ]);
        $sitepagesItem = new MenuItem([
            'title'           => lang('app.pages'),
            'url'             => ADMIN_AREA.'/website/pages',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.pages.list',
        ]);
        $sitepostsItem = new MenuItem([
            'title'           => lang('app.posts'),
            'url'             => ADMIN_AREA.'/website/posts',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.posts.list',
        ]);
        $sitesectionsItem = new MenuItem([
            'title'           => lang('app.sections'),
            'url'             => ADMIN_AREA.'/website/sections',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.sections.list',
        ]);
        $siteslidersItem = new MenuItem([
            'title'           => lang('app.slides'),
            'url'             => ADMIN_AREA.'/website/sliders',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.sliders.list',
        ]);
        $sitesocialsItem = new MenuItem([
            'title'           => lang('app.socials'),
            'url'             => ADMIN_AREA.'/website/socials',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.socials.list',
        ]);
        $sitefooterItem = new MenuItem([
            'title'           => lang('app.footer'),
            'url'             => ADMIN_AREA.'/website/footer',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'website.socials.list',
        ]);
        $visitsiteItem = new MenuItem([
            'title'           => lang('app.visit_site'),
            'url'             => site_url(),
            'fontAwesomeIcon' => 'fas fa-link nav-icon',
            'permission'      => 'website.socials.list',
        ]);
        $sidebar->menu('sidebar')->createCollection('website', 'Website')
                ->setFontAwesomeIcon('fas fa-home')
                ->setCollapsible();

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
