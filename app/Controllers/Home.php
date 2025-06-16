<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina_principal'
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function nosotros()
    {
        $data['titulo']='nosotros'
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/nosotros');
        echo view('front/footer_view');
    }

    public function servicios()
    {
        $data['titulo']='servicios'
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/servicios');
        echo view('front/footer_view');
    }

    public function registrate()
    {
        $data['titulo']='registrate'
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrate');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        $data['titulo']='contacto'
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='login'
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

        public function error404()
    {
        echo view('front/error404');
    }
}
