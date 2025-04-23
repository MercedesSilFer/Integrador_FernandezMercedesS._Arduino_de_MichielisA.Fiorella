<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('contacto', 'Home::contacto');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('ingresar', 'Home::ingresar');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('terminosYcondiciones', 'Home::terminosYcondiciones');
