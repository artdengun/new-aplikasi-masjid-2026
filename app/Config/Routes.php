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
$routes->setDefaultController('Frontend');
$routes->setDefaultMethod('frontend');
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

$routes->get('/', 'Frontend::frontend');
$routes->get('/kontak', 'Frontend::kontak');
$routes->get('/sejarah', 'Frontend::sejarah');
$routes->get('/informasi-acara', 'Frontend::informasiAcara');
$routes->get('/laporan-keuangan', 'Frontend::laporanKeuangan');
$routes->get('/masuk', 'Home::login');
$routes->get('/dashboard', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/faq','Home::faq');
$routes->get('/blank','Home::blank');
$routes->get('/404','Home::notfound');
$routes->get('/daftar','Home::register');
$routes->get('/contact','Home::contact');
$routes->get('/pusat-bantuan','Home::pusatBantuan');



// # data transaksi keuangan masjid
$routes->group('transaksi', function($routes){
    $routes->get('/', 'TransaksiController::index');
    $routes->get('create', 'TransaksiController::create');
    $routes->post('save', 'TransaksiController::save');
    $routes->get('edit/(:num)', 'TransaksiController::edit/$1');
    $routes->get('delete/(:num)', 'TransaksiController::delete/$1');
    $routes->get('export/excel', 'TransaksiController::exportExcel');
    $routes->get('export/pdf', 'TransaksiController::exportPDF');
    $routes->get('print', 'TransaksiController::print');
});

// INVENTARIS MASJID
$routes->group('inventaris', function($routes){

    $routes->get('/', 'InventarisController::index');

    $routes->get('create', 'InventarisController::create');

    $routes->post('save', 'InventarisController::save');

    $routes->get('edit/(:num)', 'InventarisController::edit/$1');

    $routes->get('delete/(:num)', 'InventarisController::delete/$1');

});

// pemeliharaan masjid terkait data inventaris
$routes->group('pemeliharaan', function($routes){

    $routes->get('/', 'PemeliharaanController::index');

    $routes->get('create', 'PemeliharaanController::create');

    $routes->post('save', 'PemeliharaanController::save');

    $routes->get('edit/(:num)', 'PemeliharaanController::edit/$1');

    $routes->get('delete/(:num)', 'PemeliharaanController::delete/$1');

});

# routes

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
