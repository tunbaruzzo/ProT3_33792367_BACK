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
$routes->get('login', 'Home::login');
$routes->get('error404', 'Home::error404');
$routes->get('registrate', 'Usuario_controller::create');
$routes->post('formValidation', 'Usuario_controller::formValidation');