<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->setPrioritize();
$routes->addRedirect('/', '/id');
$routes->get('{locale}', 'Home::index', ['priority' => 1]);
$routes->get('{locale}/(:segment)', 'Home::index/$1', ['priority' => 1]);

// Auth routes
$routes->get('register', '\App\Controllers\Auth\RegisterController::registerView');
$routes->get('login', '\App\Controllers\Auth\LoginController::loginView');
$routes->get('login/magic-link', '\App\Controllers\Auth\MagicLinkController::loginView', ['as' => 'magic-link']);
$routes->post('login/magic-link', '\App\Controllers\Auth\MagicLinkController::loginAction');
$routes->get('login/verify-magic-link', '\App\Controllers\Auth\MagicLinkController::verify', ['as' => 'verify-magic-link']);
service('auth')->routes($routes, ['except' => ['login', 'register']]);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/activation', 'Activation::index');
$routes->get('/qrcode', 'Activation::qrcode');
$routes->post('/activation', 'Activation::create');
$routes->get('/swagger', 'Swagger::index');
$routes->post('/api/auth/login', '\App\Modules\Api\Controllers\Auth\LoginController::action');
$routes->post('/api/auth/register', '\App\Modules\Api\Controllers\Auth\RegisterController::action');
$routes->get('/api/wilayahs', '\App\Modules\Api\Controllers\Wilayahs::index');

$routes->get('/api/donaturcategories', '\App\Modules\Api\Controllers\Donaturcategories::index');
$routes->get('/api/jadwalFundraisings', '\App\Modules\Api\Controllers\JadwalFundraisings::index');
$routes->get('/api/targetFundraisings', '\App\Modules\Api\Controllers\TargetFundraisings::index');
$routes->get('/api/timFundraisings', '\App\Modules\Api\Controllers\TimFundraisings::index');



$routes->post('/api/members', '\App\Modules\Api\Controllers\Members::create');
$routes->group(
    '/api',
    ['namespace' => '\App\Modules\Api\Controllers', 'filter' => 'api'],
    static function ($routes) {
        $routes->resource('users');
        $routes->resource('jabatans');
        $routes->resource('pengurus');
        $routes->resource('wilayahs', ['except' => ['index']]);
        $routes->resource('members', ['except' => ['create']]);
        $routes->resource('entities');
        $routes->resource('balances');
        $routes->resource('profiles');
        $routes->resource('pengurus');
        $routes->resource('programs');
        $routes->resource('kelas');
        $routes->resource('uom');
        $routes->resource('chartOfAccounts');
        $routes->resource('programCosts');
        $routes->resource('rawatibSchedules');
        $routes->resource('nonRawatibSchedules');
        $routes->resource('bmdonationcampaigncategories');
        $routes->resource('bmdonationcampaigns');
        $routes->resource('donaturs');
        $routes->resource('donasis');
        $routes->resource('dataruangans');
        $routes->resource('rooms');
        $routes->resource('roomReservations');
        $routes->resource('infaqRooms');
        //$routes->resource('menus');
        //$routes->resource('pages');
        //$routes->resource('posts');
        //$routes->resource('sections');
        //$routes->resource('sliders');
        //$routes->resource('socials');
    }
);

// Donasi tanpa login untuk site view
$routes->post('/api/senddonation', '\App\Modules\Api\Controllers\Donasis::insertDonation');
$routes->post('/api/confirmdonation', '\App\Modules\Api\Controllers\Donasis::insertConfirmation');

$routes->group('/api', ['namespace' => '\App\Modules\Api\Controllers', 'filter' => 'api'], 
static function ($routes) {
    $routes->resource('users');
    $routes->resource('jabatans');
    $routes->resource('pengurus');
    $routes->resource('wilayahs',['except' => ['index']]);
    $routes->resource('members',['except' => ['create']]);
    $routes->resource('entities');
    $routes->resource('balances');
    $routes->resource('profiles');
    $routes->resource('pengurus');
    $routes->resource('programs');
    $routes->resource('kelas');
    $routes->resource('uom');
    $routes->resource('chartOfAccounts');
    $routes->resource('programCosts');
    $routes->resource('rawatibSchedules');
    $routes->resource('nonRawatibSchedules');    
    $routes->resource('bmdonationcampaigncategories');
    $routes->resource('bmdonationcampaigns');
    $routes->resource('timStaffs');
    $routes->resource('donaturTypes');
    $routes->resource('donaturs');
    $routes->resource('donaturcategories',['except' => ['index']]);
    $routes->resource('targetFundraisings');
    $routes->resource('jadwalFundraisings');
    $routes->resource('timFundraisings');

    $routes->resource('boardNewsBgs');
    $routes->resource('boardNewsRuntexts');
    $routes->resource('donaturs');
    $routes->resource('donasis');
    $routes->resource('PaymentMethods');
    $routes->resource('MasterBanks');
    $routes->resource('MasterPaymentgateways');
    $routes->resource('donaturFundraisings');
    $routes->resource('tugasTims');
    //$routes->resource('menus');
    //$routes->resource('pages');
    //$routes->resource('posts');
    //$routes->resource('sections');
    //$routes->resource('sliders');
    //$routes->resource('socials');
});

        $routes->resource('boardNewsBgs');
        $routes->resource('boardNewsRuntexts');
        $routes->resource('donaturs');
        $routes->resource('donasis');
        $routes->resource('PaymentMethods');
        $routes->resource('MasterBanks');
        $routes->resource('MasterPaymentgateways');
        //$routes->resource('menus');
        //$routes->resource('pages');
        //$routes->resource('posts');
        //$routes->resource('sections');
        //$routes->resource('sliders');
        //$routes->resource('socials');
    }
);


$routes->post('/api/update_paymentmethod_activation', '\App\Modules\Api\Controllers\PaymentMethods::updateActived');
$routes->post('/api/update_donasi_state', '\App\Modules\Api\Controllers\Donasis::updateState');
$routes->get('/api/donation/(:segment)', '\App\Modules\Api\Controllers\Donasis::getDonation/$1');

// Donation View
$routes->get('{locale}/campaign/(:segment)', 'CampaignsPageController::CampaignView/$1');
$routes->get('{locale}/checkout/(:segment)', 'CheckoutController::CheckoutView/$1');
$routes->get('{locale}/instructionofpayment/(:segment)', 'InformatonofpaymentController::InformationView/$1/$2');
$routes->get('{locale}/confirmationofdonation', 'ConfirmationofdonationController::ConfirmView');
$routes->get('{locale}/donations', 'Donations::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
