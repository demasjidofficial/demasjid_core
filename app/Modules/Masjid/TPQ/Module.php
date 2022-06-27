<?php

namespace App\Modules\TPQ;

use App\Config\BaseModule;
use Bonfire\Libraries\Menus\MenuItem;

/**
 * Pengurus Module setup.
 */
class Module extends BaseModule
{
    /**
     * Setup our admin area needs.
     */
    public function initAdmin()
    {
        helper('url');
        // Settings menu for sidebar
        $sidebar = service('menus');

        $pengurusItem = new MenuItem([
            'title'           => lang('crud.pengurus'),
            'url'             => url_to('App\Modules\TPQ\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => url_to('App\Modules\TPQ\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);

        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => url_to('App\Modules\TPQ\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.account_balance'),
            'url'             => url_to('App\Modules\TPQ\Controllers\ChartOfAccountController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => url_to('App\Modules\TPQ\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);
        /**
         * SUB MODULE
         */
        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_FinancesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.finances.list',
        ]);
        $profilesItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_ProfilesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_ProgramsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.programs.list',
        ]);
        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_MastersController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.masters.list',
        ]);
        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_SchedulesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.schedules.list',
        ]);
        $learningsItem = new MenuItem([
            'title'           => lang('crud.learnings'),
            'url'             => url_to('App\Modules\TPQ\Controllers\_LearningsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.learnings.list',
        ]);
        $sidebar->menu('sidebar')->collection('tpq')
            //->addItem($pengurusItem)
            //->addItem($profileItem)
            //->addItem($accountBalanceItem)
            //->addItem($chartOfAccoutItem)
            //->addItem($balanceItem)
            ->addItem($financesItem)
            ->addItem($profilesItem)
            ->addItem($programsItem)
            ->addItem($mastersItem)
            ->addItem($schedulesItem)
            ->addItem($learningsItem);
    }
}
