<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Website\Controllers'], static function ($routes) {
    $routes->resource('website/sitemenus', ['controller' => 'SitemenusController']);
    $routes->resource('website/sitepages', ['controller' => 'SitepagesController']);
    $routes->resource('website/siteposts', ['controller' => 'SitepostsController']);
    $routes->resource('website/sitesections', ['controller' => 'SitesectionsController']);
    $routes->resource('website/sitesliders', ['controller' => 'SiteslidersController']);
    $routes->resource('website/sitesocials', ['controller' => 'SitesocialsController']);    
});

