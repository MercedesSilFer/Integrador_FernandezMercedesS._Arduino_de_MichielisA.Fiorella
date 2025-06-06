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

$routes->get('catalogo', 'Productos_controller::listar_productos');
$routes->get('catalogo/(:num)', 'Productos_controller::filtrar_productos/$1');

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
$routes->post('actualizarProducto1', 'Productos_controller::actualizar_producto');
$routes->get('eliminarProducto/(:num)', 'Productos_controller::eliminar_producto/$1');
$routes->get('activarProducto/(:num)', 'Productos_controller::activar_producto/$1');
$routes->get('consultas', 'Personas_controller::listar_consultas');
$routes->get('modificar_estado/(:num)', 'Personas_controller::modificar_estado/$1');
$routes->get('ver_catalogo', 'Productos_controller::tabla_productos');
$routes->get('verCarrito', 'Carrito_controller::ver_carrito');
$routes->post('agregarCarrito', 'Carrito_controller::agregar_carrito');