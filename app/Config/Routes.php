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

$routes->get('administrace', 'Main::administrace');

$routes->post('formular/create', 'Administrace::create');
$routes->put('formular/edit/(:num)', 'Administrace::edit/$1');
$routes->delete('formular/delete/', 'Administrace::delete');