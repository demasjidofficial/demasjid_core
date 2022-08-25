<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

class _MastersController extends AdminCrudController
{
    
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetSubMenu();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Pesantren\Views\_submodules\masters', [
            'widgets' => $widgets,
        ]);
    }

    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'schedule');
        $widgets->widget('schedule')
            ->createCollection('schedule')
        ;
    }

    private function setWidgetSubMenu()
    {
        $widgets = service('widgets');
        $kelasItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-info',
            'title' => lang('crud.class'),            
            'url'     => ADMIN_AREA . '/pesantren/kelas',
            'faIcon' => 'fas fa-graduation-cap',
        ]);

        $pendaftaranItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => lang('crud.pendaftaran'),            
            'url'     => ADMIN_AREA . '/pesantren/pendaftaran',
            'faIcon' => 'fas fa-graduation-cap',
        ]);

        $guruItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-danger',
            'title' => lang('crud.teacher'),            
            'url'     => ADMIN_AREA . '/pesantren/guru',
            'faIcon' => 'fas fa-users',
        ]);

        $kategoriPelajaranItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-danger',
            'title' => lang('crud.kategori_pelajaran'),            
            'url'     => ADMIN_AREA . '/pesantren/kategoripelajaran',
            'faIcon' => 'fas fa-users',
        ]);

        $pelajaranItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-danger',
            'title' => lang('crud.pelajaran'),            
            'url'     => ADMIN_AREA . '/pesantren/pelajaran',
            'faIcon' => 'fas fa-users',
        ]);

        $siswaItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => lang('crud.student'),            
            'url'     => ADMIN_AREA . '/baitulmal/masterpaymentgateway',
            'faIcon' => 'fas fa-users',
        ]);

        
        $widgets->widget('schedule')->collection('schedule')
            ->addItem($kelasItem)
            ->addItem($pendaftaranItem)
            ->addItem($siswaItem)
            ->addItem($guruItem)
            ->addItem($kategoriPelajaranItem)
            ->addItem($pelajaranItem)
        ;
    }
}
