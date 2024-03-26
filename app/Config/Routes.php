<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->set404Override(function(){
    echo view('404_view');
});

$routes->get('/', 'Home::index');

/**
    1 => "Super Admin"
    2 => "Admin"
    3 => "commercialist"
    4 => "operator"
    5 => "client"
    6 => "manager"
*/

$routes->group('dashboard', ['filter' => 'adminAuthFilter:1,2,3,4,5'] , function ($routes) {
    $routes->add('', 'Home::index');
    $routes->add('(:any)', 'Home::$1');
});
$routes->group('menu', ['filter' => 'adminAuthFilter:1,2,3,4,5'], function ($routes) {
    $routes->add('', 'Menu::index');
    $routes->add('(:any)', 'Menu::$1');
    $routes->add('(:any)/(:any)', 'Menu::$1/$2');
});
$routes->group('clients', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Clients::index');
    $routes->add('(:any)', 'Clients::$1');
    $routes->add('(:any)/(:any)', 'Clients::$1/$2');
});
$routes->group('objects', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Objects::index');
    $routes->add('(:any)', 'Objects::$1');
    $routes->add('(:any)/(:any)', 'Objects::$1/$2');
});
$routes->group('workorders', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'WorkOrders::index');
    $routes->add('(:any)', 'WorkOrders::$1');
    $routes->add('(:any)/(:any)', 'WorkOrders::$1/$2');
});
$routes->group('operators', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Operators::index');
    $routes->add('(:any)', 'Operators::$1');
    $routes->add('(:any)/(:any)', 'Operators::$1/$2');
});
$routes->group('settings', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Settings::index');
    $routes->add('(:any)', 'Settings::$1');
    $routes->add('(:any)/(:any)', 'Settings::$1/$2');
});
$routes->group('administrators', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Administrators::index');
    $routes->add('(:any)', 'Administrators::$1');
    $routes->add('(:any)/(:any)', 'Administrators::$1/$2');
});
$routes->group('objecttypes', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'ObjectTypes::index');
    $routes->add('(:any)', 'ObjectTypes::$1');
    $routes->add('(:any)/(:any)', 'ObjectTypes::$1/$2');
});
$routes->group('preparations', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Preparations::index');
    $routes->add('(:any)', 'Preparations::$1');
    $routes->add('(:any)/(:any)', 'Preparations::$1/$2');
});
$routes->group('reports', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Reports::index');
    $routes->add('(:any)', 'Reports::$1');
    $routes->add('(:any)/(:any)', 'Reports::$1/$2');
});
$routes->group('users', ['filter' => 'adminAuthFilter:1,2,5'], function ($routes) {
    $routes->add('', 'Users::index');
    $routes->add('(:any)', 'Users::$1');
    $routes->add('(:any)/(:any)', 'Users::$1/$2');
});

$routes->add('login', 'Login::index');
$routes->add('login/(:any)', 'Login::$1');
