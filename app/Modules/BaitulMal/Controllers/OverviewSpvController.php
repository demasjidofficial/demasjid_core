<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminController;
use App\Modules\Api\Models\TugasTimModel;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\DonaturcategoryModel;
use App\Libraries\Widgets\Panel\Panel;
use App\Libraries\Widgets\Panel\PanelItem;
use App\Modules\Api\Models\TimStaffModel;
use App\Libraries\Widgets\Stats\Stats;
use App\Modules\Api\Models\TimFundraisingModel;

class OverviewSpvController extends  AdminController
{

    protected $theme = 'Admin';

    public function index()
    {
        # code...
        helper('number');
        helper('app');
        $this->setupWidgets();
        $this->setWidgetStats();
        $this->setWidgetTugas();
        $this->setWidgetTimFund();
        $widgets = service('widgets');
        echo $this->render('App\Modules\BaitulMal\Views\overview_spv', [
            'widgets' => $widgets,
        ]);
    }
    private function setupWidgets()
    {
        $widgets = service('widgets');
        $widgets->createWidget(Stats::class, 'stats');
        $widgets->widget('stats')
            ->createCollection('stats');
        $widgets->createWidget(Panel::class, 'tugasfund');
        $widgets->widget('tugasfund')
            ->createCollection('tugasfund');
        $widgets->createWidget(Panel::class, 'timfund');
        $widgets->widget('timfund')
            ->createCollection('timfund');
    }

    private function setWidgetStats()
    {
        $widgets = service('widgets');
        $targetCost = (new TugasTimModel())->selectSum('nominal_target')->first();
        $danaCost = (new TugasTimModel())->selectSum('nominal')->first();
        $DanaItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Terkumpul',
            'value' =>  number_to_currency($danaCost->nominal ?? 0, 'IDR', 'id'),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-wallet',
        ]);


        $donaturItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Jumlah Donatur',
            'value' => (new DonaturcategoryModel())->countAllResults(false),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-users',
        ]);
        if (!empty($targetCost->nominal_target)&& !empty($danaCost->nominal)) {
            # code...
            $valKumpul = ($targetCost->nominal_target / $danaCost->nominal * 100) . "%";
        }
        $valKumpul = "0%";
        $terkumpulItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Pengumpulan dana',
            'value' => $valKumpul,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-wallet',
        ]);
        $tugasItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-default',
            'title' => 'Jumlah Tugas',
            'value' => (new TugasTimModel())->countAllResults(false),
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-users',
        ]);
        $widgets->widget('stats')->collection('stats')

            ->addItem($DanaItem)
            ->addItem($donaturItem)
            ->addItem($terkumpulItem)
            ->addItem($tugasItem);
    }

    private function setWidgetTugas()
    {
        $widgets = service('widgets');
        $tugasItem = new PanelItem([
            'itemClass' => 'table-responsive',
            'content' => $this->generateTugas()
        ]);

        $widgets->widget('tugasfund')->collection('tugasfund')
            ->addItem($tugasItem);
    }


    protected function generateTugas()
    {
        $data = (new TugasTimModel())->select(['tugas', 'progres', 'nominal', 'nominal_target', 'nama_tim', 'first_name'])->asArray()->findWidget();;
        $table = new \CodeIgniter\View\Table();
        $table->function = function ($item) {
            if (is_numeric($item)) {
                return number_to_currency($item ?? 0, 'IDR', 'id');
            }

            return convertStateProgram($item);
        };
        $table->setHeading('Tugas', 'Status', 'Terkumpul', 'Target', 'Nama Tim', 'Nama Petugas');

        $template = [
            'table_open'         => '<table class="table m-0">'
        ];
        $table->setTemplate($template);
        return $table->generate($data);
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
