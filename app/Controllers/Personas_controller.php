<?php

namespace App\Controllers;

use App\Models\Mensaje_model;
use App\Models\Personas_model;

class Personas_controller extends BaseController
{
    public function add_consulta()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[30]',
                'apellido' => 'required|max_length[50]',
                'correo' => 'required|valid_email',
                
                'mensaje' => 'required|max_length[250]|min_length[10]',
            ],
            [   // Errors
                'nombre' => [
                    'required' => 'El nombre es requerido',
                ],
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_email' => 'La dirección de correo debe ser válida'
                ],
                'mensaje' => [
                    'required' => 'El mensaje es requerido',
                    'min_length' =>'El mensaje debe tener como mínimo 10 caracteres',
                    'max_length'    => 'El mensaje debe tener como máximo 200 caracteres',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'nombre_remitente' => $request->getPost('nombre'),
                'apellido_remitente' => $request->getPost('apellido'),
                'email_mensaje' => $request->getPost('correo'),
                'contenido_mensaje' => $request->getPost('mensaje')
            ];

            $consulta = new Mensaje_model();
            $consulta->insert($data);

            return redirect()->route('contacto')->with('contenido_mensaje', 'Su consulta se envió exitosamente!');
        } else {
            $data['titulo'] = 'Contacto';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('plantillas/nav_view')
                . view('front-end/Contacto_view', $data)
                . view('plantillas/footer_view');
        }
    }
    public function registrarse()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[30]',
                'apellido' => 'required|max_length[50]',
                'correo' => 'required|valid_email|is_unique[mensaje.email_mensaje]',
                'cuil' => 'required|valid_cuil',
                'contrasena' => 'required|min_length[8]|max_length[20]',
                'contrasena_confirm' => 'required|matches[contrasena]',
            ],
            [   // Errors
                'nombre' => [
                    'required' => 'El nombre es requerido',
                ],
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_email' => 'La dirección de correo debe ser válida',
                    'is_unique' => 'El cliente ya está registrado'
                ],
                'cuil' => [
                    'required' => 'El CUIL es requerido',
                    'valid_cuil' =>'El CUIL debe ser válido',
                ],
                'contrasena' => [
                    'required' => 'La contraseña es requerida',
                    'min_length' =>'La contraseña debe tener como mínimo 8 caracteres',
                    'max_length'    => 'La contraseña debe tener como máximo 20 caracteres',
                ],
                'contrasena_confirm' => [
                    'required' => 'La confirmación de la contraseña es requerida',
                    'matches' =>'Las contraseñas no coinciden',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'nombre_persona' => $request->getPost('nombre'),
                'apellido_persona' => $request->getPost('apellido'),
                'email_persona' => $request->getPost('correo'),
                'contrasena_persona' => password_hash($request->getPost('contrasena')),
                'cuil_persona' => $request->getPost('cuil'),
                'domicilio_persona' => $request->getPost('domicilio'),
                'estado_persona' => 1,
                'id_perfil' => 2,
            ];

            $consulta = new Mensaje_model();
            $consulta->insert($data);

            return redirect()->route('ingresar')->with('contenido_mensaje', 'Se ha registrado exitosamente!');
        } else {
            $data['titulo'] = 'Registrarse';
            $data['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('plantillas/nav_view')
                . view('front-end/Registrarse_view', $data)
                . view('plantillas/footer_view');
        }
    }
}