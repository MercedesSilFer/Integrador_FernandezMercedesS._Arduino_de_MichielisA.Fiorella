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
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/comercializacion').view('plantillas/footer_view');
    }
}

