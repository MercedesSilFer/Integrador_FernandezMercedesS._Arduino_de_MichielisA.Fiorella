<?php
namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;

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
}
