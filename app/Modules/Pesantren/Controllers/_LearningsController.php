<?php

    namespace App\Modules\Pesantren\Controllers;
    
    use App\Controllers\AdminCrudController;
    use App\Libraries\Widgets\Stats\Stats;
    use App\Libraries\Widgets\Stats\StatsItem;
    
    class _LearningsController extends AdminCrudController
    {
    
        public function index()
        {
            $this->setupWidgets();
            $this->setWidgetSubMenu();
            $widgets = service('widgets');
            echo $this->render('App\Modules\Pesantren\Views\_submodules\learnings', [
                'widgets' => $widgets,
            ]);
        }
    
        private function setupWidgets()
        {
            $widgets = service('widgets');
    
            $widgets->createWidget(Stats::class, 'schedule');
            $widgets->widget('schedule')
                ->createCollection('schedule');
        }
    
        private function setWidgetSubMenu()
        {
            $widgets = service('widgets');
            $kategoriPelajaranItem = new StatsItem([
                'bgColor' => 'bg-success',
                'bgIcon' => 'bg-info',
                'title' => lang('crud.kategori_pelajaran'),
                'url'     => ADMIN_AREA . '/pesantren/kategoripelajaran',
                'faIcon' => 'fas fa-graduation-cap',
            ]);
    
            $pelajaranItem = new StatsItem([
                'bgColor' => 'bg-warning',
                'bgIcon' => 'bg-info',
                'title' => lang('crud.pelajaran'),
                'url'     => ADMIN_AREA . '/pesantren/pelajaran',
                'faIcon' => 'fas fa-graduation-cap',
            ]);
    
            $babItem = new StatsItem([
                'bgColor' => 'bg-danger',
                'bgIcon' => 'bg-danger',
                'title' => lang('crud.bab'),
                'url'     => ADMIN_AREA . '/pesantren/bab',
                'faIcon' => 'fas fa-users',
            ]);
    
            $materiItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.materi'),
                'url'     => ADMIN_AREA . '/pesantren/materi',
                'faIcon' => 'fas fa-users',
            ]);
    
            $absencesItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.absences'),
                'url'     => ADMIN_AREA . '/pesantren/absences',
                'faIcon' => 'fas fa-users',
            ]);
            
            $registrationOpenItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.registration_open'),
                'url'     => ADMIN_AREA . '/pesantren/bukapendaftaran',
                'faIcon' => 'fas fa-users',
            ]);

            $registrationItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.registration'),
                'url'     => ADMIN_AREA . '/pesantren/pendaftaran',
                'faIcon' => 'fas fa-users',
            ]);

            $registrationAdmissionItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.registration_admission'),
                'url'     => ADMIN_AREA . '/pesantren/penerimaanpendaftaran',
                'faIcon' => 'fas fa-users',
            ]);

            $bankSoalItem = new StatsItem([
                'bgColor' => 'bg-primary',
                'bgIcon' => 'bg-primary',
                'title' => lang('crud.question_bank'),
                'url'     => ADMIN_AREA . '/pesantren/penerimaanpendaftaran',
                'faIcon' => 'fas fa-book',
            ]);
    
            $widgets->widget('schedule')->collection('schedule')
                ->addItem($kategoriPelajaranItem)
                ->addItem($pelajaranItem)
                ->addItem($bankSoalItem)
                ->addItem($babItem)
                ->addItem($materiItem)
                ->addItem($absencesItem)
                ->addItem($registrationOpenItem)
                ->addItem($registrationItem)
                ->addItem($registrationAdmissionItem);
                
        }
    }
    