<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// ROUTE USER
$routes->get('/profile', 'User::index');
$routes->get('/project', 'Project::index');
$routes->get('/project/(:segment)', 'Project::tasks/$1');
$routes->post('/project/add', 'Project::create');
$routes->get('/task', 'TaskProject::index');
$routes->get('/task/(:segment)', 'TaskProject::notes/$1');
$routes->get('/task/completed/(:segment)', 'TaskProject::complete/$1');
$routes->add('/note/add', 'Note::create');
$routes->post('/note/edit/(:segment)', 'Note::edit/$1');
$routes->get('/note/delete/(:segment)', 'Note::delete/$1');
// $routes->get('/note', 'Note::index');

// ROUTE ADMIN
$routes->get('product', 'Product::index');
$routes->add('product', 'Product::create');
$routes->add('product/edit/(:segment)', 'Product::edit/$1');
$routes->get('product/delete/(:segment)', 'Product::delete/$1');
$routes->get('product/(:segment)', 'Product::task/$1');
$routes->get('taskproducts/(:segment)', 'TaskProduct::index/$1');
$routes->get('taskproduct/delete/(:segment)', 'TaskProduct::delete/$1');
$routes->add('taskproduct', 'TaskProduct::create');
$routes->add('taskproduct/edit/(:segment)', 'TaskProduct::edit/$1');

//Auth
$routes->get('/', 'Login::index');
$routes->get('Login', 'Login::index');
$routes->post('/checklogin', "Login::do_login");
$routes->get('/logout', "Login::logout");


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
