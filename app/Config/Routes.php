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
$routes->get('ver_carrito', 'Carrito_controller::ver_carrito');
$routes->post('agregar_carrito', 'Carrito_controller::agregar_carrito');
$routes->get('eliminar_item/(:any)', 'Carrito_controller::eliminar_item/$1');
$routes->get('vaciar_carrito/all', 'Carrito_controller::vaciar_carrito/all');
$routes->post('actualizarCantidad', 'Carrito_controller::actualizarCantidad');
$routes->post('finalizar_compra', 'Carrito_controller::finalizar_compra');
$routes->get('ver_comprasCliente', 'Ventas_controller::ver_comprasCliente');
$routes->get('listar_ventas', 'Ventas_controller::listar_ventas');
$routes->get('listar_clientes', 'Personas_controller::listar_clientes');
$routes->get('eliminar_cliente/(:num)', 'Personas_controller::eliminar_cliente/$1');
$routes->get('activar_cliente/(:num)', 'Personas_controller::activar_cliente/$1');
$routes->get('buscarPorFecha', 'Home::buscar_Ventas_fecha');
$routes->post('buscarVentasFecha', 'Ventas_controller::buscar_ventas_fecha');
$routes->post('buscarVtaCliente', 'Ventas_controller::buscar_ventas_cliente');
$routes->get('buscarVtaCliente', 'Home::buscarVentaCliente');
$routes->get('buscarVtaProducto', 'Home::buscarVentaProducto');
$routes->post('buscarVtaProd', 'Ventas_controller::buscarVentaProducto');