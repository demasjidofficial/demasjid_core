<?php

namespace App\Modules\Pesantren\Controllers;

use App\Controllers\AdminCrudController;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

class _SchedulesController extends AdminCrudController
{
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetSubMenu();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Pesantren\Views\_submodules\schedules', [
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
        $lessonweeklyItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-info',
            'title' => lang('crud.schedules_lessonweekly'),
            'url'     => ADMIN_AREA . '/pesantren/schedulelessonweekly',
            'faIcon' => 'fas fa-calendar',
        ]);

        $academiccalendarItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-danger',
            'title' => lang('crud.schedules_academiccalendar'),
            'url'     => ADMIN_AREA . '/pesantren/scheduleacademiccalendar',
            'faIcon' => 'fas fa-calendar',
        ]);

        $lessontestItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => lang('crud.schedules_lessontest'),
            'url'     => ADMIN_AREA . '/baitulmal/schedulelessontest',
            'faIcon' => 'fas fa-calendar',
        ]);

        $lessontestsemesterItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-warning',
            'title' => lang('crud.schedules_lessontestsemester'),
            'url'     => ADMIN_AREA . '/pesantren/schedulelessontestsemester',
            'faIcon' => 'fas fa-calendar',
        ]);


        $widgets->widget('schedule')->collection('schedule')
            ->addItem($lessonweeklyItem)
            ->addItem($academiccalendarItem)
            ->addItem($lessontestItem)
            ->addItem($lessontestsemesterItem);

    }
}
