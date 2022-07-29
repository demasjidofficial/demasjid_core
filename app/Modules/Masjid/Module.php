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
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\MasterController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.master.list',
        ]);
        $ringkasanItem = new MenuItem([
            'title'           => 'Ringkasan',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\RingkasanController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.ringkasan.list',
        ]);
        $profilItem = new MenuItem([
            'title'           => 'Profil',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            // 'url'             => url_to('App\Modules\Masjid\Controllers\ProfilController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
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
            'fontAwesomeIcon' => 'fas fa-users',
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
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.kas.list',
        ]);
        $jabatanItem = new MenuItem([
            'title'           => 'Jabatan',
            'url'             => url_to('App\Modules\Masjid\Controllers\JabatanController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.jabatan.list',
        ]);
        $memberItem = new MenuItem([
            'title'           => 'Member',
            'url'             => url_to('App\Modules\Masjid\Controllers\MemberController::index'),
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'masjid.member.list',
        ]);
        $wilayahItem = new MenuItem([
            'title'           => 'Wilayah',
            'url'             => url_to('App\Modules\Masjid\Controllers\WilayahController::index'),
            'fontAwesomeIcon' => 'fas fa-maps',
            'permission'      => 'masjid.wilayah.list',
        ]);
        $sidebar->menu('sidebar')->collection('masjid')->addItem($jabatanItem)->addItem($pengurusItem)
        ->addItem($memberItem)->addItem($wilayahItem)->addItem($masterItem)->addItem($ringkasanItem)
        ->addItem($profilItem)->addItem($jadwalSholatItem)->addItem($programItem)
        ->addItem($kasItem);
    }
}
