<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\room\Controllers'], static function ($routes) {
    $routes->resource('room/room', ['controller' => 'RoomController']);
    $routes->resource('room/konfirmruangan', ['controller' => 'KonfirmasiRuanganController']);
    $routes->resource('room/coment', ['controller' => 'KomentarController']);
    $routes->resource('room/rekaplaporan', ['controller' => 'RekapLaporanController']);
    //$routes->resource('tpq/profile', ['controller' => 'ProfileController']);
    //$routes->resource('tpq/accountbalance', ['controller' => 'AccountBalanceController']);
    //$routes->resource('tpq/balance', ['controller' => 'BalanceController']);
});
