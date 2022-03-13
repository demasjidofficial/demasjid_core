<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Pesantren\Controllers'], static function ($routes) {
    $routes->resource('pesantren/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('pesantren/balance', ['controller' => 'BalanceController']);  
});
