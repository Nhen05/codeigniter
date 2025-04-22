<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//   /restaurants => tên đường dẫn tự đặt
/// Home => Controller
/// ::restaurants => hàm trong controller
//nhánh main -> sửa nhánh main
///asdasdsad
$routes->get('/res', 'Home::restaurants');
$routes->group("admin",function($routes){
    $routes->get('login', 'admin\Login::index');
    $routes->get('dashboard', 'admin\Dashboard::index');
    $routes->get('all_restaurant', 'admin\all_restaurant::index');
    $routes->get('add_restaurant', 'admin\add_restaurant::index');
    $routes->get('update_restaurant', 'admin\update_restaurant::index');


});