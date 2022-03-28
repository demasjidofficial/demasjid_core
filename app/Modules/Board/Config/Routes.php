<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Board\Controllers'], static function ($routes) {
    $routes->resource('board/news', ['controller' => 'BoardnewsController']);
    $routes->resource('board/temperature', ['controller' => 'BoardtemperatureController']);
    $routes->resource('board/donation', ['controller' => 'BoarddonationController']);
    $routes->resource('board/livebroadcast', ['controller' => 'BoardlivebroadcastController']);
});
