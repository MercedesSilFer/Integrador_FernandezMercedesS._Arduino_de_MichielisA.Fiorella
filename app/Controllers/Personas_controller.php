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
                'correo' => 'required|valid_email|is_unique[personas.email_persona]',
                'cuil' => 'required|min_length[11]',
                'domicilio' => 'max_length[100]',
                'contrasena' => 'required|min_length[8]|max_length[20]',
                'contrasena_confirm' => 'required|matches[contrasena]',
            ],
            [   // Errors
                'nombre' => [
                    'required' => 'El nombre es requerido',
                ],
                'apellido' => [
                    'required' => 'El apellido es requerido',
                ],
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_email' => 'La dirección de correo debe ser válida',
                    'is_unique' => 'El cliente ya está registrado'
                ],
                'cuil' => [
                    'required' => 'El CUIL es requerido',
                    'min_length' =>'El CUIL debe ser válido',
                ],
                'domicilio' => [
                    'max_length'    => 'El domicilio debe tener como máximo 100 caracteres',
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
                'contrasena_persona' => password_hash($request->getPost('contrasena'), PASSWORD_BCRYPT),
                'cuil_persona' => $request->getPost('cuil'),
                'domicilio_persona' => $request->getPost('domicilio'),
                'estado_persona' => 1,
                'id_perfil' => 2,
            ];

            $persona = new Personas_model();
            $persona->insert($data);

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

    public function buscar_persona(){ //busca en la tabla para inicio de sesion
        $validation= \Config\Services::validation();
        $request= \Config\Services::request();
        $session=session();

        $validation->setRules(
            [
                'correo' => 'required|valid_email',
                'contrasena' => 'required|min_length[8]|max_length[5]',
            ],
            [   // Errors
                'correo' => [
                    'required' => 'El correo electrónico es obligatorio',
                    'valid_email' => 'La dirección de correo debe ser válida',
                ],
                'contrasena' => [
                    'required' => 'La contraseña es requerida',
                    'min_length' =>'La contraseña debe tener como mínimo 8 caracteres',
                    'max_length'    => 'La contraseña debe tener como máximo 20 caracteres',
                ]
            ]
        );

        if (!$validation ->withRequest($request)->run()){
            $data['titulo']= 'Iniciar Sesión';
            $data ['validation'] = $validation->getErrors();
            return view('plantillas/header_view', $data)
                . view('plantillas/nav_view')
                . view('front-end/Ingresar_view', $data)
                . view('plantillas/footer_view');
        }
        $email= $request->getPost('correo');
        $pass = $request->getPost('contrasena');
        

        $persona_model = new Personas_model();
        $persona = $persona_model -> where ('email_persona', $email) ->first();
        echo 'aaaaa'; die;
        if ($persona && password_verify($pass, $persona['contrasena_persona'])){
            
            $data=[
                'id_sesion' => $persona['id_persona'],
                'nombre_sesion' => $persona['nombre_persona'],
                'email_sesion' => $persona['email_persona'],
                'id_perfil' => $persona['id_perfil'],
                'login' => TRUE,
            ];
            $session->set($data);
            switch ($persona['id_perfil']) {
                case 1:
                    return redirect()->route('admin');
                    break;
                case 2:
                    return redirect()->route('index');
                    break;
                default:
                    return redirect()->route('index');
                    break;
            }

        }
    }
}