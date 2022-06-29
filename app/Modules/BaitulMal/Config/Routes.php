<?php

namespace App\Modules\Config;

$routes->group(ADMIN_AREA, ['namespace' => '\App\Modules\BaitulMal\Controllers'], static function ($routes) {
    $routes->resource('baitulmal/donationtype', ['controller' => 'BmdonationtypeController']);
    $routes->resource('baitulmal/infaqshodaqoh', ['controller' => 'BminfaqshodaqohController']);
    $routes->resource('baitulmal/infaqshodaqohcategory', ['controller' => 'BminfaqshodaqohcategoryController']);
    $routes->resource('baitulmal/donationcampaign', ['controller' => 'BmdonationcampaignController']);
    $routes->resource('baitulmal/donationcampaigncategory', ['controller' => 'BmdonationcampaigncategoryController']);
    // $routes->resource('baitulmal/addCampaigns', ['controller' => 'CampaignsController']);
    $routes->resource('baitulmal/masterbank', ['controller' => 'MasterBankController']);
    $routes->resource('baitulmal/masterpaymentgateway', ['controller' => 'MasterPaymentgatewayController']);
    $routes->resource('baitulmal/masterewallet', ['controller' => 'MasterEwalletController']);
    
    /**
     * SUB MODULE
     */
    $routes->resource('baitulmal/zakats', ['controller' => '_ZakatsController']);
    $routes->resource('baitulmal/infaqs', ['controller' => '_InfaqsController']);
    $routes->resource('baitulmal/shodaqohs', ['controller' => '_ShodaqohsController']);
    $routes->resource('baitulmal/wakafs', ['controller' => '_WakafsController']);
    $routes->resource('baitulmal/qurbans', ['controller' => '_QurbansController']);
    $routes->resource('baitulmal/configs', ['controller' => '_ConfigsController']);
    $routes->resource('baitulmal/donasis', ['controller' => 'DonasiController']);
    $routes->resource('baitulmal/campaigns', ['controller' => 'CampaignsController']);
    $routes->resource('baitulmal/masterBaitulMals', ['controller' => 'MasterController']);
    

});
