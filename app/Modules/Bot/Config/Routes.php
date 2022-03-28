<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Bot\Controllers'], static function ($routes) {
    $routes->resource('bot/easywa', ['controller' => 'BotWaController']);
    $routes->resource('bot/telegram', ['controller' => 'BotTelegramController']);
    $routes->resource('bot/email', ['controller' => 'BotEmailController']);
});
