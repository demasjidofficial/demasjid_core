<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminController;
use App\Libraries\Widgets\Panel\Panel;
use App\Libraries\Widgets\Panel\PanelItem;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

use App\Modules\Api\Models\TargetFundraisingModel;
use App\Modules\Api\Models\TimFundraisingModel;
use App\Libraries\Widgets\Charts\Charts;
use App\Libraries\Widgets\Charts\ChartsItem;

class OverviewManagerController extends AdminController
{
    protected $theme = 'Admin';

    public function index()
    {
        # code...
        helper('number');
        helper('app');

        $this->setupWidgets();
        $this->setWidgetTarget();
        $this->setWidgetFundraising();
        $this->setWidgetTimFund();
        $this->setWidgetStats();
        $this->setWidgetCharts();
        $widgets = service('widgets');
        echo $this->render('App\Modules\BaitulMal\Views\overview_manager', [
            'widgets' => $widgets,
        ]);
    }
    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'target');
        $widgets->widget('target')
            ->createCollection('target');

        $widgets->createWidget(Stats::class, 'stats');
        $widgets->widget('stats')
            ->createCollection('stats');

        $widgets->createWidget(Stats::class, 'fundraising');
        $widgets->widget('fundraising')
            ->createCollection('fundraising');

        $widgets->createWidget(Panel::class, 'timfund');
        $widgets->widget('timfund')
            ->createCollection('timfund');

        $widgets->createWidget(Charts::class, 'charts');
        $widgets->widget('charts')
            ->createCollection('charts');
    }

    private function setWidgetTarget()
    {
        $widgets = service('widgets');

        $targetCost = (new TargetFundraisingModel())->selectSum('target_nominal')->first();
        $targetItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Dana Masuk',
            'value' =>  number_to_currency($targetCost->target_nominal ?? 0, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-wallet',
        ]);

        $widgets->widget('target')->collection('target')

            ->addItem($targetItem);
    }


    // private function setWidgetCharts(){
    //     $widgets = service('widgets');
    //     $targetCharts = new ChartsItem([
    //         'title'    => 'Grafik Target Fundraising',
    //         'type'     => 'bar',
    //         'cssClass' => 'col-3',
    //         'data'     => (new TargetFundraisingModel())->asArray()->findChart(),
    //         'label'   =>(new TargetFundraisingModel())->asArray()->findChart(),
    //     ]);
    //     $widgets->widget('charts')->collection('charts')

    //     ->addItem($targetCharts);
    // }

    private function setWidgetStats()
    {
        # code...
        $widgets = service('widgets');


        $timItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Jumlah Tim',
            'value' => (new TimFundraisingModel())->countAllResults(false),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-users',
        ]);

        $tunaiCost = (new TargetFundraisingModel())->tunai()->selectSum('target_nominal')->first();
        $tunaiCost = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Jumlah Tunai',
            'value' => number_to_currency($tunaiCost->target_nominal ?? 0, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-hand-holding-dollar',
        ]);

        $ttransferCost = (new TargetFundraisingModel())->transfer()->selectSum('target_nominal')->first();
        $ttransferCost = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Jumlah Transfer',
            'value' => number_to_currency($ttransferCost->target_nominal ?? 0, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-plane',
        ]);
        
        $widgets->widget('stats')->collection('stats')

            ->addItem($timItem)
            ->addItem($ttransferCost)
            ->addItem($tunaiCost);
    }

    private function setWidgetTimFund()
    {
        $widgets = service('widgets');
        $timItem = new PanelItem([
            'itemClass' => 'table-responsive',
            'content' => $this->generateTimFund()
        ]);

        $widgets->widget('timfund')->collection('timfund')
            ->addItem($timItem);
    }

    private function setWidgetCharts()
    {
        # code...
        $widgets = service('widgets');
        $chartItem=new ChartsItem(
            [
                'cssClass'=>'col-6',

            ]

            );
    }

    private function setWidgetFundraising()
    {
        # code...
        $widgets = service('widgets');

        $perseorangan = new StatsItem([
            'bgColor' => 'progress-bar bg-primary',

            'title' => 'Perseorangan',
            'value' => (new TargetFundraisingModel())->perseorangan()->countAllResults(false),

        ]);

        $lembaga = new StatsItem([
            'bgColor' => 'progress-bar bg-danger',

            'title' => 'Institusi/Lembaga/Organisasi',
            'value' => (new TargetFundraisingModel())->lembaga()->countAllResults(false),

        ]);

        $perusahaan = new StatsItem([
            'bgColor' => 'progress-bar bg-warning',

            'title' => 'Perusahaan',
            'value' => (new TargetFundraisingModel())->perusahaan()->countAllResults(false),

        ]);

        $perseorangan = new StatsItem([
            'bgColor' => 'progress-bar bg-success',

            'title' => 'UKM',
            'value' => (new TargetFundraisingModel())->ukm()->countAllResults(false),

        ]);
        $widgets->widget('fundraising')->collection('fundraising')
            ->addItem($perseorangan)
            ->addItem($lembaga)
            ->addItem($perusahaan)
            ->addItem($perseorangan);
    }

    protected function generateTimFund()
    {
        $data = (new TimFundraisingModel())->select(['kode_tim', 'nama_tim', 'campaign_name', 'target_nominal', 'jadwal_mulai', 'jadwal_akhir'])->asArray()->findWidget();;
        $table = new \CodeIgniter\View\Table();
        $table->function = function ($item) {
            if (is_numeric($item)) {
                return number_to_currency($item ?? 0, 'IDR', 'id');
            }

            return convertStateProgram($item);
        };
        $table->setHeading('Kode', 'Nama Tim', 'Donatur', 'Nominal', 'Jadwal Mulai', 'Jadwal Akhir');

        $template = [
            'table_open'         => '<table class="table m-0">'
        ];
        $table->setTemplate($template);
        return $table->generate($data);
    }


}
