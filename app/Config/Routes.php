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
<<<<<<< HEAD
$routes->get('eventos', 'Home::eventos');   
=======
$routes->get('terminosYcondiciones', 'Home::terminosYcondiciones');
>>>>>>> 444f921eccc7c030f0edcd4970198a101f4db37a
