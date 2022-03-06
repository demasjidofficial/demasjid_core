<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Website\Controllers'], static function ($routes) {
    $routes->resource('website/menus', ['controller' => 'SitemenusController']);
    /*
    $routes->resource('website/jabatan', ['controller' => 'JabatanController']);
    $routes->resource('website/wilayah', ['controller' => 'WilayahController']);
    $routes->resource('website/member', ['controller' => 'MemberController']);
    */
});
