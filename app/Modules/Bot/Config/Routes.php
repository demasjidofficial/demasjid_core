<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Bot\Controllers'], static function ($routes) {
    $routes->resource('bot/easywa', ['controller' => 'BotwaController']);
    $routes->resource('bot/telegram', ['controller' => 'BottelegramController']);
    $routes->resource('bot/email', ['controller' => 'BotemailController']);
});
