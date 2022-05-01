<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\Masjid\Controllers'], static function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->resource('masjid/pengurus', ['controller' => 'PengurusController']);
    $routes->resource('masjid/profile', ['controller' => 'ProfileController']);    
    $routes->resource('masjid/jabatan', ['controller' => 'JabatanController']);
    $routes->resource('masjid/wilayah', ['controller' => 'WilayahController']);
    $routes->resource('masjid/member', ['controller' => 'MemberController']);
    $routes->resource('masjid/entity', ['controller' => 'EntityController']);
    $routes->resource('masjid/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('masjid/balance', ['controller' => 'BalanceController']);
    $routes->resource('masjid/program', ['controller' => 'ProgramController']);
    $routes->resource('masjid/imam', ['controller' => 'ImamController']);
    $routes->resource('masjid/chartofaccount', ['controller' => 'ChartOfAccountController']);
    $routes->resource('masjid/programcategory', ['controller' => 'ProgramCategoryController']);
    $routes->resource('masjid/reportbalancesheet', ['controller' => 'ReportBalanceSheetController']);
    $routes->resource('masjid/reportcashflow', ['controller' => 'ReportCashFlowController']);
    $routes->get('masjid/reportcashbankmutation', 'ReportCashBankMutationController::index');
    $routes->get('masjid/reportdonation', 'ReportDonaturController::index');
    $routes->resource('masjid/reportgeneralledger', ['controller' => 'ReportGeneralLedgerController']);
    $routes->resource('masjid/rawatibschedule', ['controller' => 'RawatibScheduleController']);
    /**
     * SUB MODULE
     */
    $routes->resource('masjid/finances', ['controller' => '_FinancesController']);
    $routes->resource('masjid/profiles', ['controller' => '_ProfilesController']);
    $routes->resource('masjid/programs', ['controller' => '_ProgramsController']);
    $routes->resource('masjid/masters', ['controller' => '_MastersController']);
    $routes->resource('masjid/schedules', ['controller' => '_SchedulesController']);

    $routes->get('masjid/prayerschedule', 'PrayerScheduleController::index');    
});
