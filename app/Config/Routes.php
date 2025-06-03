<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosotros', 'Home::nosotros');

$routes->get('contacto', 'Home::contacto');
$routes->post('contacto', 'Personas_controller::add_consulta');

$routes->get('comercializacion', 'Home::comercializacion');

$routes->get('registrarse', 'Home::registrarse');
$routes->post('registrarse', 'Personas_controller::registrarse');

$routes->get('ingresar', 'Home::ingresar');
$routes->post('ingresar', 'Personas_controller::buscar_persona');
$routes->get('logout', 'Personas_controller::cerrar_sesion');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('eventos', 'Home::eventos');   
$routes->get('terminos-y-condiciones', 'Home::terminosYcondiciones');
$routes->get('totebags', 'Home::totebags');
$routes->get('carteras', 'Home::carteras');
$routes->get('mochilas', 'Home::mochilas');
$routes->get('rinoneras', 'Home::rinoneras');
$routes->get('coleccion', 'Home::coleccion');
$routes->get('cargar1', 'Productos_controller::cargar_producto');
$routes->post('cargar2', 'Productos_controller::add_producto');
$routes->get('admin', 'Home::admin');
$routes->get('gestionarProductos', 'Productos_controller::gestionar_productos');
$routes->get('editarProducto/(:num)', 'Productos_controller::editar_producto/$1');
$routes->post('actualizarProducto', 'Productos_controller::actualizar_producto');
