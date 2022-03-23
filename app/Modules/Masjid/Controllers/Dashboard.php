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
use App\Modules\Api\Models\BalanceModel;
use App\Modules\Api\Models\ProgramModel;
use App\Modules\Api\Models\UserModel;
use Bonfire\Libraries\Widgets\Charts\Charts;

/**
 * Class Dashboard.
 *
 * The primary entry-point to the Bonfire admin area.
 */
class Dashboard extends AdminController
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
        helper('number');
        $this->setupWidgets();
        $this->setWidgetStats();
        $widgets = service('widgets');
        echo $this->render('App\Modules\Masjid\Views\dashboard', [
            'widgets' => $widgets,
        ]);
    }

    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'stats');
        $widgets->widget('stats')
            ->createCollection('stats')
        ;

        $widgets->createWidget(Charts::class, 'charts');
        $widgets->widget('charts')
            ->createCollection('charts')
        ;
    }

    private function setWidgetStats()
    {
        $widgets = service('widgets');        
        $programItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Program',
            'value' => (new ProgramModel())->countAllResults(false),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);
        $allIncome = (new BalanceModel())->masjid()->where(['type' => 'debit'])->selectSum('amount')->first();
        $incomeItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-success',
            'title' => 'Dana Masuk',
            'value' => number_to_currency($allIncome->amount,'IDR','id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-thumbs-up',
        ]);
        $allCost = (new BalanceModel())->masjid()->where(['type' => 'credit'])->selectSum('amount')->first();
        $costItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-danger',
            'title' => 'Dana Keluar',
            'value' => number_to_currency($allCost->amount,'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-shopping-cart',
        ]);
        $userItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-warning',
            'title' => 'Pengguna',
            'value' => (new UserModel())->countAllResults(false),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-users',
        ]);
        $widgets->widget('stats')->collection('stats')
            ->addItem($programItem)
            ->addItem($incomeItem)
            ->addItem($costItem)
            ->addItem($userItem);
    }
}

/*
// Settings widgets stats on dashboard
        $widgets   = service('widgets');
        $groups    = setting('AuthGroups.groups');
        $statsItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'title'   => 'User Groups',
            'value'   => count($groups),
            'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon'  => 'fa fa-users',
        ]);
        $widgets->widget('stats')->collection('stats')->addItem($statsItem);

        // Chart Section Begin
        $statsItem = new ChartsItem([
            'title'    => 'User classification by group',
            'type'     => 'line',
            'cssClass' => 'col-6',
        ]);
        $statsItem->addDataset('auth_groups_users', 'group', 'user_id');
        $widgets->widget('charts')->collection('charts')->addItem($statsItem);

        $statsItem1 = new ChartsItem([
            'title'    => 'User classification by group',
            'type'     => 'bar',
            'cssClass' => 'col-6',
        ]);
        $statsItem1->addDataset('auth_groups_users', 'group', 'user_id');
        $widgets->widget('charts')->collection('charts')->addItem($statsItem1);

        $statsItem2 = new ChartsItem([
            'title'    => 'User classification by group',
            'type'     => 'doughnut',
            'cssClass' => 'col-3',
        ]);
        $statsItem2->addDataset('auth_groups_users', 'group', 'user_id');
        $widgets->widget('charts')->collection('charts')->addItem($statsItem2);

        $statsItem3 = new ChartsItem([
            'title'    => 'User classification by group',
            'type'     => 'pie',
            'cssClass' => 'col-3',
        ]);
        $statsItem3->addDataset('auth_groups_users', 'group', 'user_id');
        $widgets->widget('charts')->collection('charts')->addItem($statsItem3);

        $statsItem4 = new ChartsItem([
            'title'    => 'User classification by group',
            'type'     => 'polarArea',
            'cssClass' => 'col-3',
        ]);
        $statsItem4->addDataset('auth_groups_users', 'group', 'user_id');
        $widgets->widget('charts')->collection('charts')->addItem($statsItem4);


        // Settings widgets stats on dashboard
        $widgets   = service('widgets');
        $users     = new UserModel();
        $statsItem = new StatsItem([
            'bgColor' => 'bg-blue',
            'title'   => 'Users',
            'value'   => $users->countAll(),
            'url'     => ADMIN_AREA . '/users',
            'faIcon'  => 'fa fa-user nav-icon',
        ]);
        $widgets->widget('stats')->collection('stats')->addItem($statsItem);
 */
