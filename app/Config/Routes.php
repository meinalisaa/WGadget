<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->resource('brand');
// $routes->resource('hp');
// $routes->resource('top');
// $routes->resource('spek');
// $routes->resource('getHp');

$routes->get('/', 'Beranda::index');
$routes->get('/paling_diminati', 'PalingDiminati::index');
$routes->get('/perbandingan_hp', 'PerbandinganHp::index');
$routes->get('/hasil_perbandingan', 'PerbandinganHp::hasil_perbandingan');
$routes->get('/search', 'Search::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/daftar_brand', 'Admin::daftar_brand');
$routes->get('/admin/daftar_hp', 'Admin::daftar_hp');
$routes->get('/admin/tambah_hp', 'Admin::tambah_hp');
$routes->get('/admin/ubah_hp/(:num)', 'Admin::ubah_hp/$1', ['as' => 'admin.ubah_hp']);

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
