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
    public function catalogo()
    {
        $data['titulo']= "catalogo";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/carterasXL').view('front-end/carteras').view('front-end/mochilas').view('front-end/rinoneras').view('front-end/coleccioncapsula').view('plantillas/footer_view');
    }
    public function eventos()
    {
        $data['titulo']= "Eventos";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Eventos_view').view('plantillas/footer_view');
    }
    public function terminosYcondiciones()
    {
        $data['titulo']= "terminosYcondiciones";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/TerminosYCondiciones_view').view('plantillas/footer_view');
    }
    public function totebags()
    {
        $data['titulo']= "Tote bags";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/carterasXL').view('plantillas/footer_view');
    }
    public function carteras()
    {
        $data['titulo']= "Carteras";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/carteras').view('plantillas/footer_view');
    }
    public function mochilas()
    {
        $data['titulo']= "Mochilas";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/mochilas').view('plantillas/footer_view');
    }
    public function rinoneras()
    {
        $data['titulo']= "Riñoneras";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/rinoneras').view('plantillas/footer_view');
    }
    public function coleccion()
    {
        $data['titulo']= "Colección Cápsula Color";
        return  view('plantillas/header_view', $data).view('plantillas/nav_view').view('front-end/Catalogo_view').view('front-end/coleccioncapsula').view('plantillas/footer_view');
    }
}

