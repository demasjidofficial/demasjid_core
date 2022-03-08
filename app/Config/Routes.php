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

// Auth routes
$routes->get('register', '\App\Controllers\Auth\RegisterController::registerView');
$routes->get('login', '\App\Controllers\Auth\LoginController::loginView');
$routes->get('login/magic-link', '\App\Controllers\Auth\MagicLinkController::loginView', ['as' => 'magic-link']);
$routes->post('login/magic-link', '\App\Controllers\Auth\MagicLinkController::loginAction');
$routes->get('login/verify-magic-link', '\App\Controllers\Auth\MagicLinkController::verify', ['as' => 'verify-magic-link']);
service('auth')->routes($routes, ['except' => ['login', 'register']]);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/activation', 'Activation::index');
$routes->get('/qrcode', 'Activation::qrcode');
$routes->post('/activation', 'Activation::create');
$routes->get('/swagger', 'Swagger::index');
$routes->post('api/auth/login', '\App\Modules\Api\Controllers\Auth\LoginController::action');
$routes->post('api/auth/register', '\App\Modules\Api\Controllers\Auth\RegisterController::action');
$routes->get('api/wilayahs', '\App\Modules\Api\Controllers\Wilayahs::index');
$routes->post('api/members', '\App\Modules\Api\Controllers\Members::create');
$routes->group('api', ['namespace' => '\App\Modules\Api\Controllers', 'filter' => 'api'], static function ($routes) {
    $routes->resource('users');
    $routes->resource('jabatans');
    $routes->resource('pengurus');
    $routes->resource('wilayahs',['except' => ['index']]);
    $routes->resource('members',['except' => ['create']]);
});
$routes->get('/ind', '\App\Modules\Website\Controllers\IndController::index');
$routes->get('/ara', '\App\Modules\Website\Controllers\AraController::index');
$routes->get('/eng', '\App\Modules\Website\Controllers\EngController::index');
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
