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
    $routes->resource('pesantren/pelajaran', ['controller' => 'PelajaranController']);
    $routes->resource('pesantren/bab', ['controller' => 'BabController']);
    $routes->resource('pesantren/materi', ['controller' => 'MateriController']);
    /**
     * SUB MODULE
     */
    $routes->resource('pesantren/finances', ['controller' => 'FinancesController']);
    $routes->resource('pesantren/profiles', ['controller' => 'ProfilesController']);
    $routes->resource('pesantren/programs', ['controller' => 'ProgramsController']);
    $routes->resource('pesantren/masters', ['controller' => 'MastersController']);
    $routes->resource('pesantren/schedules', ['controller' => 'SchedulesController']);
    $routes->resource('pesantren/learnings', ['controller' => 'LearningsController']);
});
