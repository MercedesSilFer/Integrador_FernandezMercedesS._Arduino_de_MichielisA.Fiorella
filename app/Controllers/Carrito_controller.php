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
        return redirect()->route('verCarrito');
    }
}
