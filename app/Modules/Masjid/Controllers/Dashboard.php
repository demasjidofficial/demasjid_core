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
use App\Libraries\Widgets\Panel\Panel;
use App\Libraries\Widgets\Panel\PanelItem;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\BalanceModel;
use App\Modules\Api\Models\ProgramModel;
use App\Modules\Api\Models\UserModel;
use App\Libraries\Widgets\Charts\Charts;

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
    protected $theme = 'admin';

    /**
     * Displays the site's initial page.
     */
    public function index()
    {
        $this->setupWidgets();
        $this->setWidgetStats();
        $this->setWidgetZis();
        $this->setWidgetProgram();
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

        $widgets->createWidget(Stats::class, 'zis');
        $widgets->widget('zis')
            ->createCollection('zis')
        ;

        $widgets->createWidget(Panel::class, 'program');
        $widgets->widget('program')
            ->createCollection('program')
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
            'value' => number_to_currency($allIncome->amount ?? 0, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-thumbs-up',
        ]);
        $allCost = (new BalanceModel())->masjid()->where(['type' => 'credit'])->selectSum('amount')->first();
        $costItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-danger',
            'title' => 'Dana Keluar',
            'value' => number_to_currency($allCost->amount ?? 0, 'IDR', 'id'),
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

    private function setWidgetProgram()
    {
        $widgets = service('widgets');
        $programItem = new PanelItem([
            'itemClass' => 'table-responsive',
            'content' => $this->generateProgram()
        ]);

        $widgets->widget('program')->collection('program')
            ->addItem($programItem);
    }

    private function setWidgetZis()
    {
        $widgets = service('widgets');
        $zakatItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => 'Zakat',
            'value' => number_to_currency(450, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-tag',
        ]);

        $infaqItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-success',
            'title' => 'Infaq',
            'value' => number_to_currency(400, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-heart',
        ]);

        $wakafItem = new StatsItem([
            'bgColor' => 'bg-danger',
            'bgIcon' => 'bg-danger',
            'title' => 'Wakaf',
            'value' => number_to_currency(4500, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cloud-download-alt',
        ]);
        $qurbanItem = new StatsItem([
            'bgColor' => 'bg-info',
            'bgIcon' => 'bg-warning',
            'title' => 'Qurban',
            'value' => number_to_currency(45000, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-comment',
        ]);
        $widgets->widget('zis')->collection('zis')
            ->addItem($zakatItem)
            ->addItem($infaqItem)
            ->addItem($wakafItem)
            ->addItem($qurbanItem);
    }

    protected function generateProgram()
    {
        $data = (new ProgramModel())->select(['name','description', 'state' ,'cost_estimate as anggaran'])->asArray()->findAll();
        $table = new \CodeIgniter\View\Table();
        $table->function = function ($item) {
            if(is_numeric($item)) {
                return number_to_currency($item ?? 0, 'IDR', 'id');
            }

            return convertStateProgram($item);
        };
        $table->setHeading('Kode', 'Nama Program', 'Status', 'Anggaran');

        $template = [
            'table_open'         => '<table class="table m-0">'];
        $table->setTemplate($template);
        return $table->generate($data);
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
