<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/barang', 'Barang::index');
// $routes->get('/barang/tambah', 'Barang::tambah');
// $routes->post('/barang/add', 'Barang::add');
// $routes->get('/barang/edit/(:segment)', 'Barang::edit/$1');
// $routes->post('/barang/update', 'Barang::update');
// $routes->get('/barang/hapus/(:segment)', 'Barang::hapus/$1');



$routes->get('barang', 'BarangController::index');
$routes->get('(:num)', 'BarangController::show/$1');






// $routes->get('/user', 'UserController::user');
// $routes->get('/produk', 'ProdukController::index');
// // $routes->get('/produk-edit', 'ProdukController::edit');
// $routes->get('produk-edit/(:num)', 'ProdukController::edit/$1');
// $routes->post('update', 'ProdukController::update');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
