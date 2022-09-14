<?php

namespace App\Modules\Room;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Room\Controllers'], static function ($routes) {
    $routes->resource('room/room', ['controller' => 'RoomController']);
    $routes->resource('room/roomreserv', ['controller' => 'RoomReservController']);
    $routes->resource('room/commentroom', ['controller' => 'CommentRoomController']);
});

$routes->get('room/ruangan', '\App\Modules\Room\Controllers\RoomSiteViewController::index');
