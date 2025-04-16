<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Trang chính
$routes->get('/', 'Home::index');

// Trang client
$routes->get('/restaurants', 'Home::restaurants');
$routes->get('/dishes', 'Home::dishes');
$routes->get('/scanqr', 'Home::scanqr');
$routes->get('/orderDetails', 'Home::orderDetails');

// Trang admin
$routes->get('/admin/auth', 'Home::auth');
$routes->get('/admin/dashboard', 'Home::das');
$routes->get('/admin/restaurants', 'Home::resList');
$routes->get('/admin/add-category', 'Home::addCategory');
$routes->get('/admin/add-restaurant', 'Home::addRes');
$routes->get('/admin/menus', 'Home::menuList');
$routes->get('/admin/add-menu', 'Home::addMenu');
$routes->get('/admin/orders', 'Home::oderList');
$routes->get('/admin/reports', 'Home::reports');
