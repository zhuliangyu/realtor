<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/houses/select/(:any)', 'Houses::select');
$routes->post('/houses/filter/', 'Houses::price_filter');
$routes->add('/houses', 'Houses::index');
$routes->add('/houses/new', 'Houses::new');
$routes->post('/houses/create', 'Houses::create');
$routes->add('/houses/edit/(:num)', 'Houses::edit/$1');
$routes->post('/houses/update', 'Houses::update');
$routes->post('/houses/avg', 'Houses::avg');

$routes->add('/neighbor', 'Neighbourhood::index');
$routes->post('/neighbor/delete/', 'Neighbourhood::destroy');

$routes->get('/realtors/(:num)/houses', 'Realtor::delegateHouses/$1');
$routes->add('/realtors', 'Realtor::index');
$routes->add('/realtors/top', 'Realtor::findTopRealtor');

$routes->add('/address', 'Address::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
