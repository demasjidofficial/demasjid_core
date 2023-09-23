<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\TPQ\Controllers'], static function ($routes) {
    $routes->resource('tpq/pengurus', ['controller' => 'PengurusController']);
    $routes->resource('tpq/profile', ['controller' => 'ProfileController']);
    $routes->resource('tpq/accountbalance', ['controller' => 'AccountBalanceController']);
    $routes->resource('tpq/balance', ['controller' => 'BalanceController']);
    $routes->resource('tpq/chartofaccount', ['controller' => 'ChartOfAccountController']);
    /**
     * SUB MODULE
     */
    $routes->resource('tpq/finances', ['controller' => '_FinancesController']);
    $routes->resource('tpq/profiles', ['controller' => '_ProfilesController']);
    $routes->resource('tpq/programs', ['controller' => '_ProgramsController']);
    $routes->resource('tpq/masters', ['controller' => '_MastersController']);
    $routes->resource('tpq/schedules', ['controller' => '_SchedulesController']);
    $routes->resource('tpq/learnings', ['controller' => '_LearningsController']);
});
