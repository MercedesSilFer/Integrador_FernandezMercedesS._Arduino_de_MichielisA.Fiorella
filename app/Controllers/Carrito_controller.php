<?php
namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;
use App\Models\Ventas_model;
use App\Models\Venta_detalles_model;

class Carrito_controller extends BaseController{
    public function ver_carrito() {
        $cart = \Config\Services::cart();
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '2'){
            return redirect()->route('/');
        }
        $data['titulo'] = 'Carrito de Compras';
        return view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('Backend/Carrito_view', $data)
            . view('plantillas/footer_view');
    }
    public function agregar_carrito() {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = array(
            'id' => $request->getPost('id'),
            'name' => $request->getPost('nombre'),
            'price' => $request->getPost('precio'),
            'qty' => 1,
        );
        $cart->insert($data);
        return redirect()->route('ver_carrito');
    }
    public function eliminar_item($rowid = null) {
        $cart = \Config\Services::cart();
        if ($rowid !== null) {
            $cart->remove($rowid);
        }
        return redirect()->route('ver_carrito');
    }
    public function vaciar_carrito($rowid = null) {
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->route('ver_carrito');
    }
    public function actualizarCantidad()
    {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $session = \Config\Services::session();

        // Obtener datos del formulario
        $rowid = $request->getPost('rowid');
        $qty = (int)$request->getPost('qty');

        // Validaciones básicas
        if (empty($rowid)) {
            $session->setFlashdata('error', 'ID del producto no proporcionado');
            return redirect()->to('ver_carrito');
        }

        if ($qty < 0) {
            $session->setFlashdata('error', 'La cantidad no puede ser negativa');
            return redirect()->to('ver_carrito');
        }

        // Verificar si el producto existe en el carrito
        $itemExists = false;
        foreach ($cart->contents() as $item) {
            if ($item['rowid'] === $rowid) {
                $itemExists = true;
                break;
            }
        }

        if (!$itemExists) {
            $session->setFlashdata('error', 'El producto no existe en el carrito');
            return redirect()->to('ver_carrito');
        }

        // Si la cantidad es 0, eliminar el producto
        if ($qty === 0) {
            $cart->remove($rowid);
            $session->setFlashdata('success', 'Producto eliminado del carrito');
            return redirect()->to('ver_carrito');
        }

        // Actualizar cantidad
        $data = [
            'rowid' => $rowid,
            'qty' => $qty
        ];

        if ($cart->update($data)) {
            $session->setFlashdata('success', 'Cantidad actualizada correctamente');
        } else {
            $session->setFlashdata('error', 'Error al actualizar la cantidad');
        }

        return redirect()->to('ver_carrito');
    }
    public function finalizar_compra() {
        $formaPago = $this->request->getPost('forma_de_pago');
        $formaEnvio = $this->request->getPost('forma_de_envio');
        if(empty($formaPago) || empty($formaEnvio)) {
            session()->setFlashdata('error', 'Seleccione método de pago y envío');
            return redirect()->to('ver_carrito');
        }
        $cart = \Config\Services::cart();
        $venta = new Ventas_model();
        $productos = new Productos_model();
        $detalle = new Venta_detalles_model();
        $cart1 = $cart->contents();

        //Verificar stock de todos los productos
        foreach ($cart1 as $item) {
            $producto = $productos->where('id_producto', $item['id'])->first();
            if ($producto['stock_producto'] < $item['qty']) {
                session()->setFlashdata('error', 'No hay suficiente stock para el producto: ' . $item['name']);
                return redirect()->to('ver_carrito');
            }
        }


        //Crear una venta
        $data = array(
            'id_persona' => session('id_sesion'),
            'forma_de_pago' => $formaPago,
            'forma_de_envio' => $formaEnvio,
            'total_venta' => $cart->total(),
            'venta_fecha' => date('Y-m-d'),
        );
        $venta_id = $venta->insert($data);
        if (!$venta_id) {
            session()->setFlashdata('error', 'Error al registrar la venta');
            return redirect()->to('ver_carrito');
        }

        //Registrar detalles y actualizar stock
        foreach ($cart1 as $item) {
            $producto = $productos->where('id_producto', $item['id'])->first();

            // Actualizar stock
            $nuevo_stock = $producto['stock_producto'] - $item['qty'];
            $productos->update($item['id'], ['stock_producto' => $nuevo_stock]);

            // Registrar detalle
            $detalle_venta = array(
                'id_venta' => $venta_id,
                'id_producto' => $item['id'],
                'cantidad' => $item['qty'],
                'detalle_precio' => $item['price']
            );
            if (!$detalle->insert($detalle_venta)) {
                session()->setFlashdata('error', 'Error al registrar los detalles de la venta');
                return redirect()->to('ver_carrito');
            }
        }
        // Vaciar carrito y redirigir
        session()->setFlashdata('success', 'Compra finalizada con éxito');
        $cart->destroy();
        return redirect()->to('ver_comprasCliente');
    }
}
