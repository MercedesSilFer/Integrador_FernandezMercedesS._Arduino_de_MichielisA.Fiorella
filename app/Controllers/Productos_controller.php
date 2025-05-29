<?php

namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;

class Productos_controller extends BaseController
{
    public function add_categorias()
    {
         $categoriaModel = new Categorias_model();
         $data['categorias']= $categoriaModel->findAll();

         $data['titulo'] = 'Agregar Producto';
          return view('plantillas/header_view', $data)
                . view('plantillas/nav_admin')
                . view('Backend/form_cargar_productos_view')
                . view('plantillas/footer_view');
    }
    public function add_producto()
    {

        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $validation->setRules(
            [
                'nombreProducto' => 'required|max_length[30]',
                'descripcion' => 'required|max_length[150]',
                'categoria' => 'required',
                'precioProducto' => 'required|decimal',
                'cantidad' => 'required|integer|min_length[1]',
                'imagenProducto' => 'uploaded[imagenProducto]|is_image[imagenProducto]|max_size[imagenProducto,2048]',
            ],
            [   // Errors
                'nombreProducto' => [
                    'required' => 'El nombre del producto es obligatorio',
                    'max_length' => 'El nombre debe tener como máximo 30 caracteres',
                ],
                'descripcion' => [
                    'required' => 'La descripción es requerida',
                    'max_length' => 'La descripción debe tener como máximo 150 caracteres',
                ],
                'categoria' => [
                    'required' => 'La categoría es requerida',
                ],
                'precioProducto' => [
                    'required' => 'El precio es requerido',
                    'decimal' => 'El precio debe ser un número decimal válido',
                ],
                'cantidad' => [
                    'required' => 'La cantidad es requerida',
                    'integer' => 'La cantidad debe ser un número entero',
                    'min_length' => 'La cantidad debe ser al menos 1',
                ],
                'imagenProducto' => [
                    'uploaded' => 'Debe seleccionar una imagen',
                    'is_image' => 'El archivo debe ser una imagen válida',
                    'max_size' => 'La imagen no debe exceder los 2MB',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'nombre_producto' => $request->getPost('nombreProducto'),
                'descripcion_producto' => $request->getPost('descripcion'),
                'id_categoria' => $request->getPost('categoria'),
                'precio_producto' => $request->getPost('precioProducto'),
                'cantidad_producto' => $request->getPost('cantidad'),
            ];
           
            $producto = new Productos_model();
            $producto->insert($data);

            return redirect()->route('cargar')->with('contenido_mensaje', 'Su producto se agregó exitosamente!');
        } else {
            $data['titulo'] = 'Cargar productos';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('plantillas/nav_view')
                . view('front-end/form_cargar_prod', $data)
                . view('plantillas/footer_view');
        }
    }
    
}