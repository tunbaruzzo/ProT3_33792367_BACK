<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function nosotros()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/nosotros');
        echo view('front/footer_view');
    }

    public function servicios()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/servicios');
        echo view('front/footer_view');
    }

    public function registrate()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrate');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }

    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }

        public function error404()
    {
        echo view('front/error404');
    }
}
