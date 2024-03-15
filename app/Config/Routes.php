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
3 => "Manager"
4 => "Client"
5 => "Content editor"
*/

$routes->group('dashboard', ['filter' => 'adminAuthFilter:dual,noreturn,blocked'] , function ($routes) {
    $routes->add('', 'Home::index');
    $routes->add('(:any)', 'Home::$1');
});
$routes->group('menu', ['filter' => 'adminAuthFilter:dual,noreturn,blocked'], function ($routes) {
    $routes->add('', 'Menu::index');
    $routes->add('(:any)', 'Menu::$1');
    $routes->add('(:any)/(:any)', 'Menu::$1/$2');
});
$routes->group('clients', ['filter' => 'adminAuthFilter:dual,noreturn,blocked'], function ($routes) {
    $routes->add('', 'Clients::index');
    $routes->add('(:any)', 'Clients::$1');
    $routes->add('(:any)/(:any)', 'Clients::$1/$2');
});

$routes->add('login', 'Login::index');
$routes->add('login/(:any)', 'Login::$1');
