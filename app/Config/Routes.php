<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::prvniStranka/');
$routes->get('prvniStranka/', 'Main::prvniStranka/');
$routes->get('seznamClanku/(:num)', 'Main::seznamClanku/$1');
$routes->get('clanek/(:num)', 'Main::clanek/$1');