<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
service('auth')->routes($routes);
$routes->get('property-type/(:any)', 'PropertiesController::getByPropType/$1', ['as' => 'propType']);
$routes->get('property-price-sort/(:any)', 'PropertiesController::getByPropPrice/$1', ['as' => 'propByPrice']);

// Property detail
$routes->get('property-detail/(:num)', 'PropertiesController::propDetail/$1', ['as' => 'propDetail']);
$routes->post('property-request/(:num)', 'PropertiesController::sendRequest/$1', ['as' => 'sendRequest']);


