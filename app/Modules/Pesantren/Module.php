<?php

namespace App\Modules\Pesantren;

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
            'url'             => url_to('App\Modules\Pesantren\Controllers\PengurusController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'tpq.balance.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profile'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ProfileController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.pengurus.list',
        ]);
        // Content Menu for sidebar
        $accountBalanceItem = new MenuItem([
            'title'           => lang('crud.account_balance'), 
            'url'             => url_to('App\Modules\Pesantren\Controllers\AccountBalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.account_balance.list',
        ]);

        $chartOfAccoutItem = new MenuItem([
            'title'           => lang('crud.chart_of_account'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ChartOfAccountController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.account_balance.list',
        ]);

        $balanceItem = new MenuItem([
            'title'           => lang('crud.balance'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\BalanceController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.balance.list',
        ]);
        $kelas = new MenuItem([
            'title'           => lang('crud.class'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\KelasController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);
        $kategoriPelajaran = new MenuItem([
            'title'           => lang('crud.kategori_pelajaran'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\KategoriPelajaranController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);
        $Pelajaran = new MenuItem([
            'title'           => lang('crud.pelajaran'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PelajaranController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);
        $Bab = new MenuItem([
            'title'           => lang('crud.bab'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\BabController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);
        $Materi = new MenuItem([
            'title'           => lang('crud.materi'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\MateriController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);

        $pendaftaran = new MenuItem([
            'title'           => lang('crud.pendaftaran'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\PendaftaranController::index'),
            'fontAwesomeIcon' => 'fas fa-book nav-icon',
            //'permission'      => 'pesantren.kelas.list',
        ]);

        /**
         * SUB MODULE
         */
        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\FinancesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.finances.list',
        ]);
        $profilesItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ProfilesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\ProgramsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.programs.list',
        ]);
        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\MastersController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.masters.list',
        ]);
        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\SchedulesController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.schedules.list',
        ]);
        $learningsItem = new MenuItem([
            'title'           => lang('crud.learnings'),
            'url'             => url_to('App\Modules\Pesantren\Controllers\LearningsController::index'),
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            //'permission'      => 'pesantren.learnings.list',
        ]);
        $sidebar->menu('sidebar')->collection('pesantren')
            //->addItem($pengurusItem)
            //->addItem($profileItem)
            //->addItem($accountBalanceItem)
            //->addItem($balanceItem)
            //->addItem($chartOfAccoutItem)
            //->addItem($kelas)
            //->addItem($kategoriPelajaran)
            //->addItem($Pelajaran)
            //->addItem($Bab)
            //->addItem($Materi)
            //->addItem($pendaftaran)
            ->addItem($financesItem)
            ->addItem($profilesItem)
            ->addItem($programsItem)
            ->addItem($mastersItem)
            ->addItem($schedulesItem)
            ->addItem($learningsItem);
          
    }
}
