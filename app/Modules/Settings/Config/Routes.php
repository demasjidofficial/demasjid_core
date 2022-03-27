<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Settings\Controllers'], static function ($routes) {
    $routes->resource('settings/languages', ['controller' => 'LanguagesController']);
    $routes->resource('settings/uom', ['controller' => 'UomController']);
    $routes->resource('settings/uom_category', ['controller' => 'UomCategoryController']);
    //$routes->resource('tpq/profile', ['controller' => 'ProfileController']);
    //$routes->resource('tpq/accountbalance', ['controller' => 'AccountBalanceController']);
    //$routes->resource('tpq/balance', ['controller' => 'BalanceController']);
});
