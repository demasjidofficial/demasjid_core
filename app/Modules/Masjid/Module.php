<?php

namespace App\Modules\Masjid;

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

        // Content Menu for sidebar
        $masterItem = new MenuItem([
            'title'           => 'Master',
            'url'             => url_to('App\Modules\Masjid\Controllers\_MastersController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\MasterController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.master.list',
        ]);
        $ringkasanItem = new MenuItem([
            'title'           => 'Ringkasan',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\RingkasanController::index'),
            'fontAwesomeIcon' => 'fas fa-memo-pad',
            'permission'      => 'masjid.ringkasan.list',
        ]);
        $profilItem = new MenuItem([
            'title'           => 'Profil',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\ProfilController::index'),
            'fontAwesomeIcon' => 'fas fa-user',
            'permission'      => 'masjid.profil.list',
        ]);
        $pengurusItem = new MenuItem([

            'title'           => 'Pengurus',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.pengurus.list',
        ]);
        $jadwalSholatItem = new MenuItem([
            'title'           => 'Jadwal Sholat',
            // 'url'             => url_to('App\Modules\Masjid\Controllers\JadwalSholatController::index'),
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            'fontAwesomeIcon' => 'fas fa-clock',
            'permission'      => 'masjid.jadwalsholat.list',
        ]);
        $programItem = new MenuItem([
            'title'           => 'Program',
            // 'url'             => url_to('App\Modules\Masjid\Controllers\ProgramController::index'),
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.program.list',
        ]);
        $kasItem = new MenuItem([
            'title'           => 'Kas',
            // 'url'             => url_to('App\Modules\Masjid\Controllers\JadwalSholatController::index'),
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            'permission'      => 'masjid.kas.list',
        ]);
        $jabatanItem = new MenuItem([
            'title'           => lang('crud.job_position'),
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),

            'title'           => lang('crud.pengurus'),
            'url'             => url_to('App\Modules\Masjid\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => url_to('App\Modules\Masjid\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.pengurus.list',
        ]);

        $jabatanItem = new MenuItem([
            'title'           => lang('crud.job_position'),
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),

            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.jabatan.list',
        ]);
        $memberItem = new MenuItem([
            'title'           => lang('crud.member'),
            'url'             => url_to('App\Modules\Masjid\Controllers\MemberController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.member.list',
        ]);
        $wilayahItem = new MenuItem([
            'title'           => lang('crud.zone'),
            'url'             => url_to('App\Modules\Masjid\Controllers\WilayahController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.wilayah.list',
        ]);

        $entityItem = new MenuItem([
            'title'           => lang('crud.entity_id'),
            'url'             => url_to('App\Modules\Masjid\Controllers\EntityController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.entity.list',
        ]);

        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.account_balance'),
            'url'             => url_to('App\Modules\Masjid\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => url_to('App\Modules\Masjid\Controllers\ChartOfAccountController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => url_to('App\Modules\Masjid\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.balance.list',
        ]);

        $programCategoryItem = new MenuItem([
            'title'           => lang('crud.program_category'),
            'url'             => url_to('App\Modules\Masjid\Controllers\ProgramCategoryController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.program.list',
        ]);

  
        /**
         * SUB MODULE
         */
        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => url_to('App\Modules\Masjid\Controllers\_FinancesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.finances.list',
        ]);
        $profilesItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => url_to('App\Modules\Masjid\Controllers\_ProfilesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => url_to('App\Modules\Masjid\Controllers\_ProgramsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.programs.list',
        ]);
        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => url_to('App\Modules\Masjid\Controllers\_MastersController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.masters.list',
        ]);

      
        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => url_to('App\Modules\Masjid\Controllers\SchedulesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'masjid.schedules.list',
        ]);        
        
        $sidebar->menu('sidebar')->collection('masjid')
            ->addItem($jabatanItem)
            ->addItem($pengurusItem)
            ->addItem($profileItem)
            ->addItem($memberItem)
            ->addItem($wilayahItem)
            ->addItem($entityItem)
            ->addItem($accountBalanceItem)
            ->addItem($programCategoryItem)
            ->addItem($programItem)
            ->addItem($chartOfAccoutItem)
            ->addItem($balanceItem)
            ->addItem($financesItem)
            ->addItem($programsItem)
            ->addItem($mastersItem)
            ->addItem($schedulesItem)
            ;

    }
}
