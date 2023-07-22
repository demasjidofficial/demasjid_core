<?php

namespace App\Modules\Pesantren;

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
            'url'             => ADMIN_AREA.'/pesantren/pengurus',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => ADMIN_AREA.'/pesantren/profile',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.pengurus.list',
        ]);
        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.account_balance'), 
            'url'             => ADMIN_AREA.'/pesantren/accountbalance',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => ADMIN_AREA.'/pesantren/chartofaccount',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => ADMIN_AREA.'/pesantren/balance',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.balance.list',
        ]);
        $kelas = new MenuItem([
            'title'           => lang('crud.class'),
            'url'             => ADMIN_AREA.'/pesantren/kelas',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);
        $kategoriPelajaran = new MenuItem([
            'title'           => lang('crud.kategori_pelajaran'),
            'url'             => ADMIN_AREA.'/pesantren/kategoripelajaran',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);
        $pelajaran = new MenuItem([
            'title'           => lang('crud.pelajaran'),
            'url'             => ADMIN_AREA.'/pesantren/pelajaran',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);
        $bab = new MenuItem([
            'title'           => lang('crud.bab'),
            'url'             => ADMIN_AREA.'/pesantren/bab',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);
        $materi = new MenuItem([
            'title'           => lang('crud.materi'),
            'url'             => ADMIN_AREA.'/pesantren/materi',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);

        $pendaftaran = new MenuItem([
            'title'           => lang('crud.pendaftaran'),
            'url'             => ADMIN_AREA.'/pesantren/pendaftaran',
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'pesantren.kelas.list',
        ]);

        /**
         * SUB MODULE
         */
        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => ADMIN_AREA.'/pesantren/finances',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.finances.list',
        ]);
        $profilesItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => ADMIN_AREA.'/pesantren/profiles',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => ADMIN_AREA.'/pesantren/programs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.programs.list',
        ]);
        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => ADMIN_AREA.'/pesantren/masters',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.masters.list',
        ]);
        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => ADMIN_AREA.'/pesantren/schedules',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.schedules.list',
        ]);
        $learningsItem = new MenuItem([
            'title'           => lang('crud.learnings'),
            'url'             => ADMIN_AREA.'/pesantren/learnings',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'pesantren.learnings.list',
        ]);
        
        // $sidebar->menu('sidebar')->createCollection('pesantren', 'Pesantren')
        //         ->setFontAwesomeIcon('fas fa-home')                                
        //         ->setCollapsible();
        // $sidebar->menu('sidebar')->collection('pesantren')
        //     //->addItem($pengurusItem)
        //     //->addItem($profileItem)
        //     //->addItem($accountBalanceItem)
        //     //->addItem($balanceItem)
        //     //->addItem($chartOfAccoutItem)
        //     //->addItem($kelas)
        //     //->addItem($kategoriPelajaran)
        //     //->addItem($Pelajaran)
        //     //->addItem($Bab)
        //     //->addItem($Materi)
        //     //->addItem($pendaftaran)
        //     ->addItem($financesItem)
        //     ->addItem($profilesItem)
        //     ->addItem($programsItem)
        //     ->addItem($mastersItem)
        //     ->addItem($schedulesItem)
        //     ->addItem($learningsItem);
          
    }
}
