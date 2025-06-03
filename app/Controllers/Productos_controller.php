<?php

namespace App\Controllers;
use App\Models\Productos_model;
use App\Models\Categorias_model;

class Productos_controller extends BaseController
{
     public function cargar_producto(){
        $categoriaModel = new Categorias_model();
        $data['categorias']= $categoriaModel->findAll();
        $data['titulo']= "Cargar Producto";
        return  view('plantillas/header_view', $data).view('Backend/nav_admin_view').view('Backend/cargar_productos_view').view('plantillas/footer_view');
    }
    public function add_producto()   // This method handles the form submission for adding a new product
    {

        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $validation->setRules(
            [
                'nombreProducto' => 'required|max_length[20]',
                'descripcion' => 'required|max_length[150]',
                'categorias' => 'is_not_unique[categorias.id_categoria]',
                'precioProducto' => 'required|decimal',
                'cantidad' => 'required|integer|min_length[1]',
                'imagenProducto' => 'uploaded[imagenProducto]|is_image[imagenProducto]|max_size[imagenProducto,2048]',
            ],
            [   // Errors
                'nombreProducto' => [
                    'required' => 'El nombre del producto es obligatorio',
                    'max_length' => 'El nombre debe tener como máximo 20 caracteres',
                ],
                'descripcion' => [
                    'required' => 'La descripción es requerida',
                    'max_length' => 'La descripción debe tener como máximo 150 caracteres',
                ],
                'categorias' => [
                    'is_not_unique' => 'Debe seleccionar una categoría',
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
            $img= $request->getFile('imagenProducto');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads', $nombre_aleatorio);
            $data = [
                'nombre_producto' => $request->getPost('nombreProducto'),
                'precio_producto' => $request->getPost('precioProducto'),
                'id_categoria' => $request->getPost('categorias'),
                'descripcion_producto' => $request->getPost('descripcion'),
                'imagen_producto' => $nombre_aleatorio,                
                'stock_producto' => $request->getPost('cantidad'),
                'estado_producto' => 1, // Assuming 1 means active
            ];
           
            $producto = new Productos_model();
            $producto->insert($data);

            return redirect()->route('cargar1')->with('contenido_mensaje', 'Su producto se agregó exitosamente!');
        } else {
            $categoria = new Categorias_model();
            $data['categorias'] = $categoria->findAll();
            $data['titulo'] = 'Cargar Producto';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('Backend/nav_admin_view')
                . view('Backend/cargar_productos_view')
                . view('plantillas/footer_view');
        }
    }
    function gestionar_productos() {
        $producto_model = new Productos_model();
        $categorias_model = new Categorias_model();
        $data['categorias'] = $categorias_model->findAll();
        $data['productos'] = $producto_model->join('categorias', 'categorias.id_categoria = productos.id_categoria')->findAll();
        $data['titulo'] = 'Listar Productos';
        return view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/listar_productos_view')
            . view('plantillas/footer_view');
    }
    public function editar_producto($id_producto=null)
    {
        $producto_model = new Productos_model();
        $categorias_model = new Categorias_model();
        $data['categorias'] = $categorias_model->findAll();
        $data['titulo'] = 'Editar Producto';
        $data['producto'] = $producto_model->where('id_producto',$id_producto)->first();
        return view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/editar_productos_view', $data)
            . view('plantillas/footer_view');
    }
    public function actualizar_producto(){       

        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $validation->setRules(
            [
                'nombreProducto' => 'required|max_length[20]',
                'descripcion' => 'required|max_length[150]',
                'categorias' => 'is_not_unique[categorias.id_categoria]',
                'precioProducto' => 'required|decimal',
                'cantidad' => 'required|integer|min_length[1]',
                'imagenProducto' => 'uploaded[imagenProducto]|is_image[imagenProducto]|max_size[imagenProducto,2048]',
            ],
            [   // Errors
                'nombreProducto' => [
                    'required' => 'El nombre del producto es obligatorio',
                    'max_length' => 'El nombre debe tener como máximo 20 caracteres',
                ],
                'descripcion' => [
                    'required' => 'La descripción es requerida',
                    'max_length' => 'La descripción debe tener como máximo 150 caracteres',
                ],
                'categorias' => [
                    'is_not_unique' => 'Debe seleccionar una categoría',
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
            $img= $request->getFile('imagenProducto');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads', $nombre_aleatorio);
            $id_producto = $request->getPost('id_producto'); 
            $data = [
                'nombre_producto' => $request->getPost('nombreProducto'),
                'precio_producto' => $request->getPost('precioProducto'),
                'id_categoria' => $request->getPost('categorias'),
                'descripcion_producto' => $request->getPost('descripcion'),
                'imagen_producto' => $nombre_aleatorio,                
                'stock_producto' => $request->getPost('cantidad'),
                'estado_producto' => 1, // Assuming 1 means active
            ];
           
            $producto = new Productos_model();
            $producto->update($id_producto, $data);

            return redirect()->route('gestionarProductos')->with('contenido_mensaje', 'Su producto se actualizó exitosamente!');
        }
     }
        public function eliminar_producto($id_producto = null){
            $data = array('estado_producto' => 0); // Assuming 0 means inactive
            $producto_model = new Productos_model();
            $producto_model->update($id_producto, $data);
            return redirect()->route('gestionarProductos')->with('contenido_mensaje', 'El producto se eliminó exitosamente!');
        }
    
    public function activar_producto($id_producto = null){
        $data = array('estado_producto' => 1);
        $producto_model = new Productos_model();
        $producto_model->update($id_producto, $data);
        return redirect()->route('gestionarProductos')->with('contenido_mensaje', 'El producto se activó exitosamente!');
    }
    }