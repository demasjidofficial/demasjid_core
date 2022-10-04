<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminController;
use App\Modules\Api\Models\TugasTimModel;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\DonaturcategoryModel;
use App\Modules\Api\Models\DonasiModel;
use App\Libraries\Widgets\Panel\Panel;
use App\Libraries\Widgets\Panel\PanelItem;
use App\Modules\Api\Models\TimStaffModel;
use App\Modules\Api\Models\DonaturFundraisingModel;
use App\Libraries\Widgets\Stats\Stats;

class OverviewTimController extends  AdminController
{

    protected $theme = 'Admin';
    protected $donasiRoute = 'admin/baitulmal/donation';
    public function index()
    {
        # code...
        helper('number');
        helper('app');
        $this->setupWidgets();
        $this->setWidgetStats();
        $this->setWidgetTugas();
        $this->setWidgetDonatur();
        $widgets = service('widgets');
        echo $this->render('App\Modules\BaitulMal\Views\overview_tim', [
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
        $widgets->createWidget(Panel::class, 'donatur');
        $widgets->widget('donatur')
            ->createCollection('donatur');
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

        if ($targetCost->nominal_target!=0 && $danaCost->nominal!=0) {
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

    private function setWidgetDonatur()
    {
        # code...
        $widgets = service('widgets');
        $donatur = new PanelItem([
            'itemClass' => 'table-responsive',
            'content' => $this->generateDonatur()
        ]);

        $widgets->widget('donatur')->collection('donatur')
            ->addItem($donatur);
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
    protected function generateDonatur()
    {
        # code...
        $data = (new DonaturFundraisingModel())->select(['tugas', 'tanggal_transaksi', 'nama', 'donatur_fundraising.nominal', 'nominal_target', 'nama_tim', 'username'])->asArray()->findWidget();;
        $table = new \CodeIgniter\View\Table();
        $table->function = function ($item) {
            if (is_numeric($item)) {
                return number_to_currency($item ?? 0, 'IDR', 'id');
            }

            return convertStateProgram($item);
        };
        $table->setHeading('Tugas', 'Tanggal', 'Donatur', 'Nominal', 'Target Nominal', 'Tim', 'Petugas');

        $template = [
            'table_open'         => '<table class="table m-0">'
        ];
        $table->setTemplate($template);
        return $table->generate($data);
    }
}
