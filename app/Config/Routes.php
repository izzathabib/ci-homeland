<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
service('auth')->routes($routes);
$routes->get('property-type/(:any)', 'PropertiesController::getByPropType/$1', ['as' => 'propType']);
$routes->get('property-price-sort/(:any)', 'PropertiesController::getByPropPrice/$1', ['as' => 'propByPrice']);

