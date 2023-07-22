<?php

namespace App\Modules\TPQ;

use App\Config\BaseModule;
use Bonfire\Menus\MenuItem;

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
            'url'             => ADMIN_AREA.'/tpq/pengurus',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => ADMIN_AREA.'/tpq/profile',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);

        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.account_balance'),
            'url'             => ADMIN_AREA.'/tpq/accountbalance',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => ADMIN_AREA.'/tpq/chartofaccount',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => ADMIN_AREA.'/tpq/balance',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);
        /**
         * SUB MODULE
         */
        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => ADMIN_AREA.'/tpq/finances',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.finances.list',
        ]);
        $profilesItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => ADMIN_AREA.'/tpq/profiles',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => ADMIN_AREA.'/tpq/programs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.programs.list',
        ]);
        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => ADMIN_AREA.'/tpq/masters',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.masters.list',
        ]);
        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => ADMIN_AREA.'/tpq/schedules',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.schedules.list',
        ]);
        $learningsItem = new MenuItem([
            'title'           => lang('crud.learnings'),
            'url'             => ADMIN_AREA.'/tpq/learnings',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'tpq.learnings.list',
        ]);

        // $sidebar->menu('sidebar')->createCollection('tpq', 'TPQ')
        //         ->setFontAwesomeIcon('fas fa-home')
        //         ->setCollapsible();
        // $sidebar->menu('sidebar')->collection('tpq')
        //     //->addItem($pengurusItem)
        //     //->addItem($profileItem)
        //     //->addItem($accountBalanceItem)
        //     //->addItem($chartOfAccoutItem)
        //     //->addItem($balanceItem)
        //     ->addItem($financesItem)
        //     ->addItem($profilesItem)
        //     ->addItem($programsItem)
        //     ->addItem($mastersItem)
        //     ->addItem($schedulesItem)
        //     ->addItem($learningsItem);
    }
}
