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
    $routes->post('create', 'admin\Login::create');
    $routes->post('login', 'admin\Login::login');
    $routes->post('logout', 'admin\Login::logout');
    $routes->get('logout', 'admin\Login::logout');
    $routes->get('restaurant', 'admin\Res::index');



});