<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::prvniStranka/');
$routes->get('prvniStranka/', 'Main::prvniStranka/');
$routes->get('seznamClanku', 'Main::seznamClanku/');
$routes->get('clanek/(:num)', 'Main::clanek/$1');
$routes->get('sezony/', 'Main::sezony/');
$routes->get('sezona/(:num)', 'Main::sezona/$1');

$routes->get('formular/admin', 'Main::admin');
$routes->post('formular/admin', 'Main::admin');

$routes->get('formular/create', 'Formular::create');
$routes->post('formular/update/(:num)', 'Formular::update/$1');
$routes->get('formular/edit/(:num)', 'Formular::edit/$1');
$routes->delete('formular/delete/(:num)', 'Formular::delete/$1');
$routes->post('formular/store', 'Formular::store');