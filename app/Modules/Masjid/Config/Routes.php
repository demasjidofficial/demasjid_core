<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Masjid\Controllers'], static function ($routes) {
    $routes->resource('masjid/pengurus', ['controller' => 'PengurusController']);
    $routes->resource('masjid/profile', ['controller' => 'ProfileController']);    
    $routes->resource('masjid/jabatan', ['controller' => 'JabatanController']);
    $routes->resource('masjid/wilayah', ['controller' => 'WilayahController']);
    $routes->resource('masjid/member', ['controller' => 'MemberController']);
    $routes->resource('masjid/entity', ['controller' => 'EntityController']);
    $routes->resource('masjid/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('masjid/balance', ['controller' => 'BalanceController']);
    $routes->resource('masjid/program', ['controller' => 'ProgramController']);
    
});
