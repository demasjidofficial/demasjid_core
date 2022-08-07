<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Board\Controllers'], static function ($routes) {
    $routes->resource('board/news', ['controller' => '_BoardNewsController']);
    $routes->resource('board/temperature', ['controller' => 'BoardtemperatureController']);
    $routes->resource('board/donation', ['controller' => 'BoarddonationController']);
    $routes->resource('board/livebroadcast', ['controller' => 'BoardlivebroadcastController']);
    $routes->resource('board/configs', ['controller' => '_BoardConfigsController']);


    $routes->resource('board/newsbg', ['controller' => 'BoardNewsBgController']);
    $routes->resource('board/newsrunningtext', ['controller' => 'BoardNewsRuntextController']);

    $routes->resource('configs/device', ['controller' => 'BoardDeviceController']);
    // $routes->resource('board/configs/device', ['controller' => 'BoardDeviceController']);


});

$routes->get('board/news_viewtv', '\App\Modules\Board\Controllers\BoardnewsTVController::index');

