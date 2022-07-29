<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bonfire;

use Bonfire\Libraries\Widgets\Charts\Charts;
use Bonfire\Libraries\Widgets\Stats\Stats;

/**
 * Class Bonfire
 *
 * Provides basic utility functions used throughout the
 * lifecycle of a request in the admin area.
 */
class Bonfire
{
    /**
     * Holds cached instances of all Module classes
     *
     * @var array
     */
    private $moduleConfigs = [];

    /**
     * Are we currently in the admin area?
     *
     * @var bool
     */
    public $inAdmin = false;

    /**
     * @var array
     */
    public $menus = [];

    /**
     * Sets up admin menus, initializes modules.
     */
    public function boot()
    {
        helper('filesystem');

        $this->saveInAdmin();

        if ($this->inAdmin) {
            $this->setupMenus();
            $this->setupWidgets();
        }

        $this->discoverCoreModules();
        $this->initModules();
    }

    /**
     * Checks to see if we're in the admin area
     * by analyzing the current url and the ADMIN_AREA constant.
     */
    private function saveInAdmin()
    {
        $url = current_url();

        $path = parse_url($url, PHP_URL_PATH);

        $this->inAdmin = strpos($path, ADMIN_AREA) !== false;
    }

    /**
     * Creates any admin-required menus so they're
     * available to use by any modules.
     */
    private function setupMenus()
    {
        $menus = service('menus');

        // Sidebar menu
        $menus->createMenu('sidebar');
        $menus->menu('sidebar')
            ->createCollection('masjid', 'Masjid')
            ->setFontAwesomeIcon('nav-icon fas fa-mosque')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('pesantren', 'Pesantren')
            ->setFontAwesomeIcon('nav-icon fas fa-school')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('baitulmal', 'Baitul Mal')
            ->setFontAwesomeIcon('nav-icon fas fa-donate')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('tpq', 'TPQ/TPA')
            ->setFontAwesomeIcon('nav-icon fas fa-quran')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('muamalah', 'Muamalah')
            ->setFontAwesomeIcon('nav-icon fas fa-shopping-bag')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('website', 'Website')
            ->setFontAwesomeIcon('nav-icon fas fa-globe')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('info', 'Info')
            ->setFontAwesomeIcon('nav-icon fas fa-info')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('content', 'Konten')
            ->setFontAwesomeIcon('nav-icon fas fa-palette');
        $menus->menu('sidebar')
            ->createCollection('settings', 'Pengaturan')
            ->setFontAwesomeIcon('nav-icon fas fa-cog')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('tools', 'Alat')
            ->setFontAwesomeIcon('nav-icon fas fa-toolbox')
            ->setCollapsible();
        $menus->menu('sidebar')
            ->createCollection('umum', 'Umum')
            ->setFontAwesomeIcon('nav-icon fas fa-angle-double-right');
        $menus->menu('sidebar')
            ->createCollection('users', 'Pengguna')
            ->setFontAwesomeIcon('nav-icon fas fa-users');
        $menus->menu('sidebar')
            ->createCollection('modul', 'Modul')
            ->setFontAwesomeIcon('nav-icon fas fa-book');



        // Top "icon" menu for notifications, account, etc.
        $menus->createMenu('iconbar');
    }

    /**
     * Creates any admin-required widgets so they're
     * available to use by any modules.
     */
    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'stats');
        $widgets->widget('stats')
            ->createCollection('stats');

        $widgets->createWidget(Charts::class, 'charts');
        $widgets->widget('charts')
            ->createCollection('charts');
    }

    /**
     * Adds any directories within bonfire/Modules
     * into routes as a new namespace so that discover
     * features will automatically work for core modules.
     */
    private function discoverCoreModules()
    {
        if (!$modules = cache('bf-modules-search')) {
            $modules = [];

            $map = directory_map(ROOTPATH . 'bonfire/Modules', 1);

            foreach ($map as $row) {
                if (substr($row, -1) !== DIRECTORY_SEPARATOR) {
                    continue;
                }

                $name                                 = trim($row, DIRECTORY_SEPARATOR);
                $modules["Bonfire\\Modules\\{$name}"] = ROOTPATH . "bonfire/Modules/{$name}";
            }

            $modules = array_merge($modules, $this->getAppModules());
            cache()->save('bf-modules-search', $modules);
        }

        // save instances of our module configs
        foreach ($modules as $namespace => $dir) {
            if (!is_file($dir . '/Module.php')) {
                continue;
            }

            include_once $dir . '/Module.php';
            $className                       = $namespace . '\Module';
            $this->moduleConfigs[$namespace] = new $className();
        }
    }

    /**
     * Performs any initialization needed for our modules.
     */
    private function initModules()
    {
        $method = $this->inAdmin ? 'initAdmin' : 'initFront';

        foreach ($this->moduleConfigs as $config) {
            $config->{$method}($this);
        }
    }

    private function getAppModules()
    {
        $modules = [];
        $map     = directory_map(APPPATH . 'Modules', 1);

        foreach ($map as $row) {
            if (substr($row, -1) !== DIRECTORY_SEPARATOR) {
                continue;
            }

            $name                             = trim($row, DIRECTORY_SEPARATOR);
            $modules["App\\Modules\\{$name}"] = APPPATH . "Modules/{$name}";
        }

        return $modules;
    }
}
