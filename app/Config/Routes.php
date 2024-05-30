<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
service('auth')->routes($routes);
$routes->get('props/prop-type/(:any)', 'Properties\PropertiesController::getByPropType/$1', ['as' => 'get.prop.type']);

