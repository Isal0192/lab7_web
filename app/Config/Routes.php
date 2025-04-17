<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;

/**
 * @var RouteCollection $routes
 */

// Mengaktifkan fitur Auto Routing
$routes->setAutoRoute(false);

// Routing untuk halaman utama
$routes->get('/', 'Home::index');

// Routing untuk halaman Page
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');
$routes->get('/about', 'Artikel::about');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

// routing buat admin
$routes->group('admin', function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
    });