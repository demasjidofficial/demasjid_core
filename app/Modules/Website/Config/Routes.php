<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Website\Controllers'], static function ($routes) {
    $routes->resource('website/menus', ['controller' => 'SitemenusController']);
    $routes->resource('website/pages', ['controller' => 'SitepagesController']);
    $routes->resource('website/posts', ['controller' => 'SitepostsController']);
    $routes->resource('website/sections', ['controller' => 'SitesectionsController']);
    $routes->resource('website/sliders', ['controller' => 'SiteslidersController']);
    $routes->resource('website/socials', ['controller' => 'SitesocialsController']);   
    $routes->resource('website/footer', ['controller' => 'SitefooterController']);  
});

$routes->get('website/register', '\App\Modules\Website\Controllers\RegisterController::new');
$routes->post('website/register', '\App\Modules\Website\Controllers\RegisterController::create');

