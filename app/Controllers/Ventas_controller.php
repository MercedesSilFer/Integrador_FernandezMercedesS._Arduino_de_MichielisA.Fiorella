<?php
namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;
use App\Models\Ventas_model;
use App\Models\Venta_detalles_model;
use App\Models\Personas_model;

class Venta_controller extends BaseController {
     public function ver_comprasCliente() {
        $session = \Config\Services::session();
        $ventasModel = new Ventas_model();
        if (!$session->has('id_persona')) {
            return redirect()->route('login');
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

        return view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('Backend/Compras_cliente_view', $data)
            . view('plantillas/footer_view');
    } 
}