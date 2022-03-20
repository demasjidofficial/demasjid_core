<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\TPQ\Controllers'], static function ($routes) {
    $routes->resource('tpq/pengurus', ['controller' => 'PengurusController']);
    $routes->resource('tpq/profile', ['controller' => 'ProfileController']);
    $routes->resource('tpq/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('tpq/balance', ['controller' => 'BalanceController']);
});
