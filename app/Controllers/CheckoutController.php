<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\Api\Models\PaymentMethodModel;
use App\Modules\Api\Models\SitemenusModel;

class CheckoutController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */


    public function CheckoutView()
    {
        $CATEGORY_BANK = 1;
        $CATEGORY_PAYMENT_GATEWAY = 2;

        helper(['form','number','app']);
        $this->setupWidgets();
        $this->setWidgetCounter();
        $this->setWidgetService();
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();
        $masjid_profile = $profile;
        
        // get data of masjid socials
        $masjid_socials = (new SitesocialsModel())->asArray()->findAll();
        
        // get data of activated languages
        $languages = [
            [
                'id' => 1,
                'code' => 'ID',
                'name' => 'indonesia',
                'path_icon' => '',
            ],
            [
                'id' => 2,
                'code' => 'SA',
                'name' => 'arab',
                'path_icon' => '',
            ],
            [
                'id' => 3,
                'code' => 'EN',
                'name' => 'english',
                'path_icon' => '',
            ],
        ];

        // get data of menus // default indonesia = 1
        $nav_menu = $this->constructMenu((new SitemenusModel())->asArray()->findAllRelease(1));


        $uri = current_url(true);

        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->find((int)$uri->getSegment(3));
        $paymentListBank = (new PaymentMethodModel())->select('payment_method.id, payment_method.rek_no, payment_method.rek_name, master_bank.path_logo, master_bank.name')->where(['payment_category_id'=> $CATEGORY_BANK, 'isActived'=> 1])->join('master_bank', 'master_bank.id = payment_method.master_payment_id')->asArray()->find();
        $paymentListPayGat = (new PaymentMethodModel())->select('payment_method.id, payment_method.rek_no, payment_method.rek_name, master_paymentgateway.path_logo, master_paymentgateway.name')->where(['payment_category_id'=> $CATEGORY_PAYMENT_GATEWAY, 'isActived'=> 1])->join('master_paymentgateway', 'master_paymentgateway.id = payment_method.master_payment_id')->asArray()->find();

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['masjid_socials'] = $masjid_socials;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['languages'] = $languages;
        $data['nav_menu'] = $nav_menu;
        $data['widgets'] = service('widgets');  
        $data['actionUrl'] = site_url('/admin/baitulmal/donation/');   
        $data['paymentListBank'] = $paymentListBank;
        $data['paymentListPayGat'] = $paymentListPayGat;

        // render view
        return $this->render('\App\Views\Campaign\checkout', $data);
    }

    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'counter');
        $widgets->widget('counter')
            ->createCollection('counter')
        ;

        $widgets->createWidget(Stats::class, 'service');
        $widgets->widget('service')
            ->createCollection('items')
        ;
    }

    private function setWidgetCounter()
    {
        $widgets = service('widgets');        
        $programItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Program',
            'value' => 1200,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $donasiItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Donasi',
            'value' => 80,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);
        
        $salurDonasiItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Donasi tersalurkan',
            'value' => 3390,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $santriItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Santri',
            'value' => 2877,
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'fas fa-cog',
        ]);

        $widgets->widget('counter')->collection('counter')
            ->addItem($programItem)
            ->addItem($donasiItem)
            ->addItem($salurDonasiItem)
            ->addItem($santriItem);
    }

    private function setWidgetService()
    {
        $widgets = service('widgets');        
        $zakatItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Zakat',
            'value' => "Layanan penyaluran zakat secara syar'i berbasis teknologi memudahkan jamaah sekitar masjid dalam melaksanakan zakat, meliputi Zakat Fitrah, Zakat Mal, dst.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-null-1',
        ]);

        $infaqItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Infaq & Shodaqoh',
            'value' => "Layanan penyaluran, pengelolaan infaq & shodaqoh secara syar'i berbasis teknologi yang memudahkan jamaah sekitar masjid dalam pelaksanaan dan operasionalnya sehingga bisa tepat guna serta mencapai ridlo Alloh bersama-sama.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-think',
        ]);
        
        $wakafItem = new StatsItem([
            'bgColor' => 'bg-teal',
            'bgIcon' => 'bg-info',
            'title' => 'Wakaf',
            'value' => "Layanan penyaluran, pengelolaan, pemberdayaan wakaf dari para jamaah sekitar masjid berbasis teknologi sehingga mendapatkan manfaat bersama atas wakaf itu secara syar'i.",
            // 'url'     => ADMIN_AREA . '/settings/groups',
            'faIcon' => 'flaticon-gear',
        ]);
        
        $widgets->widget('service')->collection('items')
            ->addItem($zakatItem)
            ->addItem($infaqItem)
            ->addItem($wakafItem);
    }
}
