<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\BaitulMal\Controllers'], static function ($routes) {

    $routes->resource('baitulmal/overviewmanager', ['controller' => 'OverviewManagerController']);
    $routes->resource('baitulmal/donationtype', ['controller' => 'BmdonationtypeController']);
    $routes->resource('baitulmal/infaqshodaqoh', ['controller' => 'BminfaqshodaqohController']);
    $routes->resource('baitulmal/infaqshodaqohcategory', ['controller' => 'BminfaqshodaqohcategoryController']);
    $routes->resource('baitulmal/donationcampaign', ['controller' => 'BmdonationcampaignController']);
    $routes->resource('baitulmal/donationcampaigncategory', ['controller' => 'BmdonationcampaigncategoryController']);
    $routes->resource('baitulmal/masterbank', ['controller' => 'MasterBankController']);
    $routes->resource('baitulmal/masterpaymentgateway', ['controller' => 'MasterPaymentgatewayController']);
    $routes->resource('baitulmal/masterewallet', ['controller' => 'MasterEwalletController']);
    $routes->resource('baitulmal/donation', ['controller' => 'DonasiController']);
    
    $routes->resource('baitulmal/donatur', ['controller' => 'DonaturController']);
    $routes->resource('baitulmal/donaturtype', ['controller' => 'DonaturTypeController']);
    $routes->resource('baitulmal/paymentmethod', ['controller' => 'PaymentMethodController']);
    $routes->resource('baitulmal/paymentcategory', ['controller' => 'PaymentCategoryController']);
    $routes->resource('baitulmal/paymentmethod_paygat', ['controller' => 'PaymentMethodPaygatController']);
    $routes->resource('baitulmal/paymentmethod_transfer', ['controller' => 'PaymentMethodTransferController']);
    $routes->resource('baitulmal/donaturcategory', ['controller' => 'DonaturcategoryController']);
    $routes->resource('baitulmal/targetfundraising', ['controller' => 'TargetFundraisingController']);
    $routes->resource('baitulmal/jadwalfundraising', ['controller' => 'JadwalFundraisingController']);
    $routes->resource('baitulmal/timfundraising', ['controller' => 'TimFundraisingController']);
    $routes->resource('baitulmal/timstaff', ['controller' => 'TimStaffController']);

    $routes->resource('baitulmal/tugastim', ['controller' => 'TugasTimController']);
    $routes->resource('baitulmal/tugastimspv', ['controller' => 'TugasTimControllerSpv']);
    $routes->resource('baitulmal/donaturfundraising', ['controller' => 'DonaturFundraisingController']);
    $routes->resource('baitulmal/donaturfundraisingspv', ['controller' => 'DonaturFundraisingSpvController']);
    $routes->resource('baitulmal/overview_manager', ['controller' => 'OverviewManagerController']);
    $routes->resource('baitulmal/overview_tim', ['controller' => 'OverviewTimController']);
    $routes->resource('baitulmal/overview_spv', ['controller' => 'OverviewSpvController']);
    /** ask to delete */
    $routes->resource('baitulmal/_oldCampaigns', ['controller' => 'CampaignsController']);
    
    /**
     * SUB MODULE
     */
    $routes->resource('baitulmal/zakats', ['controller' => '_ZakatsController']);
    $routes->resource('baitulmal/infaqs', ['controller' => '_InfaqsController']);
    $routes->resource('baitulmal/shodaqohs', ['controller' => '_ShodaqohsController']);
    $routes->resource('baitulmal/wakafs', ['controller' => '_WakafsController']);
    $routes->resource('baitulmal/qurbans', ['controller' => '_QurbansController']);
    $routes->resource('baitulmal/configs', ['controller' => '_ConfigsController']);
    $routes->resource('baitulmal/campaigns', ['controller' => '_CampaignsController']);
    $routes->resource('baitulmal/masterBaitulMals', ['controller' => 'MasterController']);
    $routes->resource('baitulmal/frundaising', ['controller' => '_FundraisingController']);

});
