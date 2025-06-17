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
        $data['ventas'] = $ventasModel->where('id_persona', $id_cliente)->findAll(); //guarda ventas del cliente
        $ventaDetallesModel = new Venta_detalles_model();
        $data['detalles'] = [];
        foreach ($data['ventas'] as $venta) {
            $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll(); // obtiene detalles de cada venta
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
        $data['ventas'] = $ventasModel->join('personas', 'venta.id_persona = personas.id_persona')->findAll(); // obtiene todas las ventas
        $ventaDetallesModel = new Venta_detalles_model();
        $data['detalles'] = [];
        foreach ($data['ventas'] as $venta) {
            $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll(); // obtiene detalles de cada venta
            foreach ($detalles as &$detalle) {
                $detalle['descripcion_producto'] = (new Productos_model())->find($detalle['id_producto']);
            }
            $data['detalles'][$venta['id_venta']] = $detalles;
        }

        return  view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/ventas_view', $data)
            . view('plantillas/footer_view');
    }
    public function buscar_ventas_fecha()
    {
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'fecha_inicio' => 'required|valid_date[Y-m-d]',
                'fecha_fin' => 'required|valid_date[Y-m-d]',
            ],
            [   // Errors
                'fecha_inicio' => [
                    'required' => 'La fecha de inicio es obligatoria.',
                    'valid_date' => 'La fecha de inicio debe ser una fecha válida en el formato Y-m-d.',
                ],
                'fecha_fin' => [
                    'required' => 'La fecha de fin es obligatoria.',
                    'valid_date' => 'La fecha de fin debe ser una fecha válida en el formato Y-m-d.',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'fecha_inicio' => $request->getPost('fecha_inicio'),
                'fecha_fin' => $request->getPost('fecha_fin'),
            ];

            $ventasModel = new Ventas_model();
            $ventas = $ventasModel->where('venta_fecha >=', $data['fecha_inicio'])
                ->where('venta_fecha <=', $data['fecha_fin'])->join('personas', 'venta.id_persona = personas.id_persona')->findAll();

            $ventaDetallesModel = new Venta_detalles_model();
            $data['ventas'] = $ventas;
            $data['detalles'] = [];
        foreach ($data['ventas'] as $venta) {
            $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll(); // obtiene detalles de cada venta
            foreach ($detalles as &$detalle) {
                $detalle['descripcion_producto'] = (new Productos_model())->find($detalle['id_producto']);
            }
            $data['detalles'][$venta['id_venta']] = $detalles;
            $data['titulo'] = 'Ventas desde ' . $data['fecha_inicio'] . ' hasta ' . $data['fecha_fin'];
        }
        if (empty($data['ventas'])) {
            $data['titulo'] = 'No se encontraron ventas';
            return redirect()->route('buscarPorFecha')->with('contenido_mensaje', 'No se encontraron ventas registradas en el período indicado!');
        }else {
            return  view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/ventas_view', $data)
                . view('plantillas/footer_view');}
        } else {
            // Si la validación falla, redirigir con errores
            $data['titulo'] = 'Error en la búsqueda de ventas';
            $data['validation'] = $validation->getErrors();
           return view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/ver_ventasFechas_view', $data)
                . view('plantillas/footer_view');
        }
    }
    public function buscar_ventas_cliente()
    {
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $validation->setRules(
            [
                'correo' => 'required|valid_email',
            ],
            [   // Errors
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio.',
                    'valid_email' => 'Debe ingresar un correo electrónico válido.',
                ],
            ]
        );
        if ($validation->withRequest($request)->run()) {
            $correo = $request->getPost('correo');
            $personaModel = new Personas_model();
            $cliente = $personaModel->where('email_persona', $correo)->first();
            if (!$cliente) {
                $data['titulo'] = 'Cliente no encontrado';
                return redirect()->route('buscarVtaCliente')->with('contenido_mensaje', 'No se encontró un cliente con ese correo electrónico.');
            }
            $ventasModel = new Ventas_model();
            $ventas = $ventasModel->where('venta.id_persona', $cliente['id_persona'])->join('personas', 'venta.id_persona = personas.id_persona')->findAll();
            $ventaDetallesModel = new Venta_detalles_model();
            $data = [
                'correo' => $correo,
                'cliente' => $cliente,
            ];
            $data['ventas'] = $ventas;
            $data['detalles'] = [];
            foreach ($data['ventas'] as $venta) {
                $detalles = $ventaDetallesModel->where('id_venta', $venta['id_venta'])->findAll();
                foreach ($detalles as &$detalle) {
                    $detalle['descripcion_producto'] = (new Productos_model())->find($detalle['id_producto']);
                }
                $data['detalles'][$venta['id_venta']] = $detalles;
                $data['titulo'] = 'Ventas de ' . $cliente['nombre_persona'] . ' ' . $cliente['apellido_persona'];
            }
            if (empty($data['ventas'])) {
                $data['titulo'] = 'No se encontraron ventas';
                return redirect()->route('buscarVtaCliente')->with('contenido_mensaje', 'No se encontraron ventas registradas para el cliente indicado!');
            }
            return  view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/ventas_view', $data)
                . view('plantillas/footer_view');
        }
        else {
            // Si la validación falla, redirigir con errores
            $data['titulo'] = 'Error en la búsqueda de ventas';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/ver_ventasCliente_view', $data)
                . view('plantillas/footer_view');
        }
    }
    public function buscarVentaProducto()
    {
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $validation->setRules(
            [
                'codigo' => 'required|integer',
            ],
            [   // Errors
                'codigo' => [
                    'required' => 'El código del producto es obligatorio.',
                    'integer' => 'El código del producto debe ser un número entero.',
                ],
            ]
        );
        if ($validation->withRequest($request)->run()) {
            $codigo = $request->getPost('codigo');
            $productosModel = new Productos_model();
            $categorias= new Categorias_model();
            $personasModel = new Personas_model();
            $producto = $productosModel->where('id_producto', $codigo)->join('categorias', 'productos.id_categoria = categorias.id_categoria')->first();
            if (!$producto) {
                $data['titulo'] = 'Producto no encontrado';
                return redirect()->route('buscarVtaProducto')->with('contenido_mensaje', 'No se encontró un producto con ese código.');
            }
            $ventasModel = new Ventas_model();
            $ventaDetallesModel = new Venta_detalles_model();
            $ventas = $ventaDetallesModel
                ->where('id_producto', $codigo)
                ->join('venta', 'venta_detalles.id_venta = venta.id_venta')
                ->join('personas', 'venta.id_persona = personas.id_persona')
                ->findAll();

            $data = [
                'codigo' => $codigo,
                'producto' => $producto,];
            $data['ventas'] = $ventas;
            $data['detalles'] = [];
            foreach ($data['ventas'] as $venta) {
                $detalles = $ventaDetallesModel->where('id_producto', $venta['id_producto'])->findAll();
                foreach ($detalles as &$detalle) {
                    $detalle['descripcion_producto'] = (new Productos_model())->find($detalle['id_producto']);
                }
                $data['detalles'][$venta['id_venta']] = $detalles;
                $data['titulo'] = 'Ventas del producto ' . $producto['nombre_producto'];
            }
             if (empty($data['ventas'])) {
                $data['titulo'] = 'No se encontraron ventas';
                return redirect()->route('buscarVtaProducto')->with('contenido_mensaje', 'No se encontraron ventas registradas para el producto indicado!');
            }
            return  view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/ventas_view', $data)
                . view('plantillas/footer_view');
        }
        else {
            // Si la validación falla, redirigir con errores
            $data['titulo'] = 'Error en los datos ingresados';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/buscarVtasProd_view', $data)
                . view('plantillas/footer_view');
        }
    }
}