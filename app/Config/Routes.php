<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/modul', 'Modul::gambar');
$routes->get('/materi', 'Materi::video');

