<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(false);

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about','page::about');
$routes->get('/contact','page::contact');
$routes->get('/faq','page::faq');