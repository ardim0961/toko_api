<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('/registrasi', 'RegistrasiController::registrasi');

$routes->post('/login', 'LoginController::login');

$routes->get('/produk', 'ProdukController::index');

$routes->post('/produk', 'ProdukController::create');

$routes->get('/produk/(:num)', 'ProdukController::show/$1');

$routes->post('/produk/(:num)/update', 'ProdukController::update/$1');

$routes->delete('/produk/(:num)', 'ProdukController::delete/$1');