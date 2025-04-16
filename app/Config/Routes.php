<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/restaurants', 'Home::restaurants');
$routes->get('/dishes', 'Home::dishes');
$routes->get('/scanqr', 'Home::scanqr');
$routes->get('/orderDetails', 'Home::orderDetails');





