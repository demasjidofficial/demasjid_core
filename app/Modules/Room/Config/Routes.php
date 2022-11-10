<?php

namespace App\Modules\Room;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Room\Controllers'], static function ($routes) {
    $routes->resource('room/room', ['controller' => 'RoomController']);
    $routes->resource('room/roomreservation', ['controller' => 'RoomReservationController']);
    $routes->resource('room/infaqroom', ['controller' => 'InfaqRoomController']);
    $routes->resource('room/reportroom', ['controller' => 'ReportRoomController']);
});

$routes->get('room/ruangan', '\App\Modules\Room\Controllers\RoomSiteViewController::index');
