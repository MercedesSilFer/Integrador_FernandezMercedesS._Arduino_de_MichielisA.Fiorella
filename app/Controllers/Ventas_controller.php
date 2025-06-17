<?php
namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;
use App\Models\Ventas_model;
use App\Models\Venta_detalles_model;
use App\Models\Personas_model;

class Ventas_controller extends BaseController {
     public function ver_comprasCliente() {
        $session = \Config\Services::session();
        $ventasModel = new Ventas_model();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '2'){
            return redirect()->route('/');
        }
        $id_cliente = $session->get('id_sesion');
        $data['titulo'] = 'Tus Compras';
        $data['ventas'] = $ventasModel->where('id_persona', $id_cliente)->findAll();
        $ventaDetallesModel = new Venta_detalles_model();
        $data['detalles'] = [];
        foreach ($data['ventas'] as $venta) {
            $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll();
            foreach ($detalles as &$detalle) {
                $detalle['descripcion_producto'] = (new Productos_model())->find($detalle['id_producto']);
            }
            $data['detalles'][$venta['id_venta']] = $detalles;
        }

        return  view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('Backend/Compras_clientes_view', $data)
            . view('plantillas/footer_view');
    } 
    public function listar_ventas() {
    $session = \Config\Services::session();
    $ventasModel = new Ventas_model();
    $personasModel = new Personas_model();
    $ventaDetallesModel = new Venta_detalles_model();
    $productosModel = new Productos_model();

    if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
        return redirect()->route('ingresar');
    }
    if( $session->get('id_perfil') !== '1'){
        return redirect()->route('/');
    }
    $data['titulo'] = 'Ventas';
    $data['ventas'] = $ventasModel->findAll();

    // Agregar datos de cliente, dirección y cuotas a cada venta
    foreach ($data['ventas'] as &$venta) {
        // Datos del cliente
        $persona = $personasModel->find($venta['id_persona']);
        $venta['nombre_cliente'] = 
            trim(($persona['nombre_persona'] ?? '') . ' ' . ($persona['apellido_persona'] ?? ''));
        $venta['cuil_cliente'] = $persona['cuil_persona'] ?? '';
        $venta['direccion'] = $persona['domicilio_persona'] ?? '';

        // Cuotas (si existe el campo en la tabla venta)
        $venta['cuotas'] = $venta['cuotas'] ?? '';

        // Detalles de la venta
        $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll();
        foreach ($detalles as &$detalle) {
            $detalle['descripcion_producto'] = $productosModel->find($detalle['id_producto']);
        }
        $data['detalles'][$venta['id_venta']] = $detalles;
    }
    unset($venta); // Rompe la referencia

    return  view('plantillas/header_view', $data)
        . view('Backend/nav_admin_view')
        . view('Backend/ventas_view', $data)
        . view('plantillas/footer_view');
}
    public function filtrar_ventas() {
        $session = \Config\Services::session();
        $ventasModel = new Ventas_model();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '1'){
            return redirect()->route('/');
        }
        $data['titulo'] = 'Ventas';
        $filtro = $this->request->getPost('filtro');
        $data['ventas'] = $ventasModel->where('venta_fecha', $filtro)->findAll();

        return  view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/ventas_view', $data)
            . view('plantillas/footer_view');
    }
}