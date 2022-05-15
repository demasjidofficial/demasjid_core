<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminController;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

/**
 * Class Dashboard.
 *
 * The primary entry-point to the Bonfire admin area.
 */
class SchedulesController extends AdminController
{
    /**
     * The theme to use.
     *
     * @var string
     */
    protected $theme = 'Admin';
    /**
     * Displays the site's initial page.
     */
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetSchedule();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Masjid\Views\schedule\dashboard', [
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

    private function setWidgetSchedule()
    {
        $widgets = service('widgets');
        $rawatibItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-info',
            'title' => 'Rawatib',            
            'url' => ADMIN_AREA . '/masjid/rawatibschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $jumatItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => 'Jumat',            
            'url' => ADMIN_AREA . '/masjid/jumatschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $tarawihItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => 'Tarawih',            
            'url' => ADMIN_AREA . '/masjid/tarawihschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $iedItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-primary',
            'title' => 'Ied',            
            'url' => ADMIN_AREA . '/masjid/iedschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $gerhanaItem = new StatsItem([
            'bgColor' => 'bg-secondary',
            'bgIcon' => 'bg-primary',
            'title' => 'Gerhana',            
            'url' => ADMIN_AREA . '/masjid/gerhanaschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $programItem = new StatsItem([
            'bgColor' => 'bg-purple',
            'bgIcon' => 'bg-primary',
            'title' => lang('crud.schedules_program'),            
            'url' => ADMIN_AREA . '/masjid/programschedule',
            'faIcon' => 'fas fa-clock',
        ]);

        $calendarItem = new StatsItem([
            'bgColor' => 'bg-info',
            'bgIcon' => 'bg-primary',
            'title' => lang('crud.schedules_calendar'),            
            'url' => ADMIN_AREA . '/masjid/calendarschedule',
            'faIcon' => 'fas fa-calendar',
        ]);
        
        $widgets->widget('schedule')->collection('schedule')
            ->addItem($rawatibItem)
            ->addItem($jumatItem)
            ->addItem($tarawihItem)
            ->addItem($iedItem)
            ->addItem($gerhanaItem)
            ->addItem($programItem)
            ->addItem($calendarItem)
        ;
    }
}