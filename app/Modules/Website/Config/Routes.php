<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Website\Controllers'], static function ($routes) {
    $routes->resource('website/menus', ['controller' => 'SitemenusController']);
    $routes->resource('website/pages', ['controller' => 'SitepagesController']);
    $routes->resource('website/posts', ['controller' => 'SitepostsController']);
    $routes->resource('website/sections', ['controller' => 'SitesectionsController']);
    $routes->resource('website/socials', ['controller' => 'SitesocialsController']);    
});

