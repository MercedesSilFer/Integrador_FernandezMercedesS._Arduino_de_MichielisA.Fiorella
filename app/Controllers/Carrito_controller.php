<?php
namespace App\Controllers;

use App\Models\Productos_model;
use App\Models\Categorias_model;

class Carrito_controller extends BaseController
{
    public function ver_carrito()
    {
       $cart = \Config\Services::cart();
       $data['titulo'] = 'Carrito de Compras';
       return view('plantillas/header_view', $data)
           . view('plantillas/nav_view')
           . view('front-end/Carrito_view')
           . view('plantillas/footer_view');
    }
    public function agregar_carrito(){
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = array(
            'id' => $request->getPost('id_producto'),
            'name' => $request->getPost('nombre_producto'),
            'qty' => 1,
            'price' => $request->getPost('precio_producto'),
            'options' => array(
                'imagen_producto' => $request->getPost('imagen_producto')
            )
        );
        $cart->insert($data);
        return redirect()->route('ver_carrito');
    }
    
}