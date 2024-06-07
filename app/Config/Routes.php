<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Dashboard::index');
// $routes->get('/partai/anggota', 'Partai::anggota');
$routes->get('/partai', 'Partai::index');
$routes->get('/partai/tambah', 'Partai::create');
$routes->post('/partai/simpan', 'Partai::simpan');
$routes->get('/partai/edit/(:num)', 'Partai::edit/$1');
$routes->post('/partai/update/(:num)', 'Partai::update/$1');
$routes->get('/partai/delete/(:num)', 'Partai::delete/$1');
$routes->get('/pengurus', 'Pengurus::index');
$routes->get('/pengurus/tambah', 'Pengurus::create');
$routes->post('/pengurus/simpan', 'Pengurus::simpan');
$routes->get('/pengurus/edit/(:num)', 'Pengurus::edit/$1');
$routes->post('/pengurus/update/(:num)', 'Pengurus::update/$1');
$routes->get('/pengurus/delete/(:num)', 'Pengurus::delete/$1');

