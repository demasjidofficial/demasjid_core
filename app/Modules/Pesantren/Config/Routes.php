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
    $routes->resource('pesantren/pendaftaran', ['controller' => 'PendaftaranController']);
    $routes->resource('pesantren/guru', ['controller' => 'GuruController']);
    $routes->resource('pesantren/tingkatpendidikan', ['controller' => 'TingkatPendidikanController']);
    $routes->resource('pesantren/siswa', ['controller' => 'SiswaController']);
    $routes->resource('pesantren/tahunajaran', ['controller' => 'TahunAjaranController']);

    /**
     * SUB MODULE
     */
    $routes->resource('pesantren/finances', ['controller' => '_FinancesController']);
    $routes->resource('pesantren/profiles', ['controller' => '_ProfilesController']);
    $routes->resource('pesantren/programs', ['controller' => '_ProgramsController']);
    $routes->resource('pesantren/masters', ['controller' => '_MastersController']);
    $routes->resource('pesantren/schedules', ['controller' => '_SchedulesController']);
    $routes->resource('pesantren/learnings', ['controller' => '_LearningsController']);

});
