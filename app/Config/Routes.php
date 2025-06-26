<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('servicios', 'Home::servicios');
$routes->get('contacto', 'Home::contacto');
$routes->get('error404', 'Home::error404');
$routes->get('registrate', 'Empleado_controller::registrate');
$routes->post('formValidation', 'Empleado_controller::formValidation');
$routes->get('login', 'Empleado_controller::login');
$routes->post('auth', 'Empleado_controller::auth');
$routes->get('logout', 'Empleado_controller::logout');
$routes->get('empleados', 'Empleado_controller::index');
$routes->get('empleados/eliminar/(:num)', 'Empleado_controller::delete/$1');
$routes->get('empleados/editar/(:num)', 'Empleado_controller::edit/$1');
$routes->post('empleados/actualizar/(:num)', 'Empleado_controller::update/$1');

