<?php

namespace App\Modules\Board\Controllers;

use App\Controllers\AdminCrudController;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

class _BoardNewsController extends AdminCrudController
{
    // public function index()
    // {
    //     return $this->render('App\Modules\BaitulMal\Views\_submodules\masterBaitulMal',[]);
    // }
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetSubMenu();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Board\Views\_submodules\_boardnews', [
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
        $boardNewsBGItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-info',
            'title' => 'Background Slide',
            'url'     => ADMIN_AREA . '/board/boardnewsbg',
            'faIcon' => 'fas fa-tv',
        ]);

        $runTextItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => 'Run Text',
            'url'     => ADMIN_AREA . '/board/boardnewsruntext',
            'faIcon' => 'fas fa-comment',
        ]);

        $pratinjatuLinkItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => 'Pratinjau Link',
            'url'     => '/board/news_viewtv',
            'faIcon' => 'fas fa-link nav-icon',
        ]);

        $widgets->widget('schedule')->collection('schedule')
        ->addItem($boardNewsBGItem)
        ->addItem($runTextItem)
        ->addItem($pratinjatuLinkItem)
        ;
    }
}
