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
class PrayerScheduleController extends AdminController
{
    /**
     * The theme to use.
     *
     * @var string
     */
    protected $theme = 'admin';
    /**
     * Displays the site's initial page.
     */
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetSchedule();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Masjid\Views\prayer_schedule\dashboard', [
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
            'url'     => ADMIN_AREA . '/masjid/rawatibschedule',
            'faIcon' => 'fas fa-book',
        ]);

        $jumatItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => 'Jumat',
            'url'     => ADMIN_AREA . '/masjid/rawatibschedule',
            'faIcon' => 'fas fa-tag',
        ]);

        $tarawihItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => 'Tarawih',
            'url'     => ADMIN_AREA . '/masjid/rawatibschedule',
            'faIcon' => 'fas fa-tag',
        ]);

        $iedItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-primary',
            'title' => 'Ied',
            'url'     => ADMIN_AREA . '/masjid/rawatibschedule',
            'faIcon' => 'fas fa-tag',
        ]);

        $widgets->widget('schedule')->collection('schedule')
            ->addItem($rawatibItem)
            ->addItem($jumatItem)
            ->addItem($tarawihItem)
            ->addItem($iedItem)
        ;
    }
}
