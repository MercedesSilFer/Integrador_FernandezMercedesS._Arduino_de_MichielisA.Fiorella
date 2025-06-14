<?php
namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;
use App\Models\Ventas_model;
use App\Models\Venta_detalles_model;

class Carrito_controller extends BaseController{
    public function ver_carrito() {
        $cart = \Config\Services::cart();
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
        $cart = \Config\Services::cart();
        $venta= new Ventas_model();
        $productos = new Productos_model();
        $detalle = new Venta_detalles_model();
        $cart1= $cart->contents();
        
        foreach ($cart1 as $item) {
            $producto= $productos->where('id_producto', $item['id'])->first();
            if($producto['stock_producto'] < $item['qty']) {
                session()->setFlashdata('error', 'No hay suficiente stock para el producto: ' . $item['name']);
                return redirect()->to('ver_carrito');
            }
        }
        $data = array('id_persona' => session('id_sesion'),
                      'forma_pago' => 'Tarjeta de Crédito',  // Ejemplo de forma de pago, agregar lógica de ingreso de forma de pago
                      'forma_envio' => 'Envío a Domicilio', // Ejemplo de forma de envío, agregar lógica de ingreso de forma de envío
                      'total_venta' => $cart->total(),
                      'venta_fecha' => date('Y-m-d'),);
        
        $venta_id = $venta->insert($data);
        if (!$venta_id) {
            session()->setFlashdata('error', 'Error al registrar la venta');
            return redirect()->to('ver_carrito');
        }
        $cart1 = $cart->contents();
        // Registrar detalles de la venta
        foreach ($cart1 as $item) {
            $detalle_venta = array(
                'id_venta' => $venta_id,
                'id_producto' => $item['id'],
                'cantidad' => $item['qty'],
                'detalle_precio' => $item['price']
            );
          
            // Actualizar stock del producto
            $producto = $productos->where('id_producto', $item['id'])->first();
            $data = ['stock_producto'=>$producto['stock_producto'] - $item['qty']];
            $productos->update($item['id'], $data);
            $detalle->insert($detalle_venta);
              if (!$detalle->insert($detalle_venta)) {
                session()->setFlashdata('error', 'Error al registrar los detalles de la venta');
                return redirect()->to('ver_carrito');
            }else{
                session()->setFlashdata('success', 'Compra finalizada con éxito');
                $cart->destroy(); // Vaciar el carrito después de finalizar la compra
                return redirect()->to('ver_comprasCliente');
            }
        }
    }
}
