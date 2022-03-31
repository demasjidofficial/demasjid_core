<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Pesantren\Controllers'], static function ($routes) {
    $routes->resource('pesantren/pengurus', ['controller' => 'PengurusController']);
    $routes->resource('pesantren/profile', ['controller' => 'ProfileController']);
    $routes->resource('pesantren/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('pesantren/balance', ['controller' => 'BalanceController']);  
    $routes->resource('pesantren/kelas', ['controller' => 'KelasController']);
    $routes->resource('pesantren/chartofaccount', ['controller' => 'ChartOfAccountController']);    
    $routes->resource('pesantren/kategoripelajaran', ['controller' => 'KategoriPelajaranController']);
});
