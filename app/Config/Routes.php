<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/profile', 'Pages::profile');
$routes->get('/projects', 'Pages::projects');
$routes->get('/contacts', 'Pages::contacts');


$routes->group('admin', function ($routes) {
    $routes->get('/', 'ProjectsAdmin::index');
    $routes->get('projects', 'ProjectsAdmin::index');
    $routes->add('projects/create', 'ProjectsAdmin::create');
    $routes->add('projects/save', 'ProjectsAdmin::save');
    $routes->add('projects/(:num)/edit', 'ProjectsAdmin::edit/$1');
    $routes->get('projects/(:num)/delete', 'ProjectsAdmin::delete/$1');
});

$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
