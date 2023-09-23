<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;

class MasterController extends AdminCrudController
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
        echo $this->render('App\Modules\BaitulMal\Views\dasboard', [
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
        $bankItem = new StatsItem([
            'bgColor' => 'bg-success',
            'bgIcon' => 'bg-info',
            'title' => 'Bank',
            'url'     => ADMIN_AREA . '/baitulmal/masterbank',
            'faIcon' => 'fas fa-university',
        ]);

        $ewalletItem = new StatsItem([
            'bgColor' => 'bg-warning',
            'bgIcon' => 'bg-info',
            'title' => 'e-Wallet',
            'url'     => ADMIN_AREA . '/baitulmal/masterewallet',
            'faIcon' => 'fas fa-wallet',
        ]);

        $paymentGatewayItem = new StatsItem([
            'bgColor' => 'bg-primary',
            'bgIcon' => 'bg-primary',
            'title' => 'Payment Gateway',
            'url'     => ADMIN_AREA . '/baitulmal/masterpaymentgateway',
            'faIcon' => 'fas fa-credit-card',
        ]);

        $widgets->widget('schedule')->collection('schedule')
            ->addItem($bankItem)
            ->addItem($ewalletItem)
            ->addItem($paymentGatewayItem)
        ;
    }
}
