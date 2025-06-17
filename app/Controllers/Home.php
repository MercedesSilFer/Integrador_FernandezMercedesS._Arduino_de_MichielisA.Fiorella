<?php

namespace App\Controllers;



class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo']= "Kurundu Cueros";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Index_view').view('plantillas/footer_view');
    }

    public function nosotros()
    {
        $data['titulo']= "Sobre nosotros";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Nosotros_view').view('plantillas/footer_view');
    }
    public function contacto()
    {
        $data['titulo']= "Contacto";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Contacto_view').view('plantillas/footer_view');
    }
    public function comercializacion()
    {
        $data['titulo']= "Comercialización";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Comercializacion_view').view('plantillas/footer_view');
    }
    public function registrarse()
    {
        $data['titulo']= "Registrarse";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Registrarse_view').view('plantillas/footer_view');
    }
    public function ingresar()
    {
        $data['titulo']= "ingresar";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Ingresar_view').view('plantillas/footer_view');
    }

    public function eventos()
    {
        $data['titulo']= "Eventos";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Eventos_view').view('plantillas/footer_view');
    }
    public function terminosYcondiciones()
    {
        $data['titulo']= "términos de uso";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Terminos-y-condiciones_view').view('plantillas/footer_view');
    }
   
    public function admin()
    {
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '1'){
            return redirect()->route('/');
        }
        $data['titulo']= "Administración";
        return  view('plantillas/header_view', $data).view('Backend/nav_admin_view').view('Backend/Index_admin_view').view('plantillas/footer_view');
    }
    public function buscar_Ventas_fecha(){
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }   
        if( $session->get('id_perfil') !== '1'){
            return redirect()->route('/');
        }
        $data['titulo'] = "Buscar Ventas por Fecha";
        return  view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/ver_ventasFechas_view', $data)
            . view('plantillas/footer_view');
    }
    public function buscarVentaCliente(){
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '1'){
            return redirect()->route('/');
        }
        $data['titulo'] = "Buscar Ventas por Cliente";
        return  view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/buscar_vtas_cte_view', $data)
            . view('plantillas/footer_view');
    }
    public function buscarVentaProducto(){
        $session = \Config\Services::session();
        if (!$session->has('id_sesion') || !$session->has('id_perfil')) {
            return redirect()->route('ingresar');
        }
        if( $session->get('id_perfil') !== '1'){
            return redirect()->route('/');
        }
        $data['titulo'] = "Buscar Ventas por Producto";
        return  view('plantillas/header_view', $data)
            . view('Backend/nav_admin_view')
            . view('Backend/buscarVtasProd_view', $data)
            . view('plantillas/footer_view');
    }

}

