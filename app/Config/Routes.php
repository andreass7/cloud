<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
// READ UPDATE DELETE
$routes->get('/produk', 'produkController::index');
$routes->get('/produk/(:num)', 'produkController::edit/$1');
// $routes->get('/Home/(:num)', 'Home::edit/$1');
// CREATE

$routes->post('/barangMasuk/update/(:num)', 'produkController::update/$1');
$routes->post('/barangMasuk/delete/(:num)', 'produkController::delete/$1');
$routes->get('/barangMasuk', 'masukController::index');
$routes->POST('/barangMasuk/create', 'masukController::create');
// $routes->get('/barangKeluar', 'keluarController::index');
