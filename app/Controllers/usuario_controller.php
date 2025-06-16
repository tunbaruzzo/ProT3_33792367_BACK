<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct(){
        helper(['form', 'url']);
    }

    public function create () {
        $dato['titulo']='registrate';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/empleados/registrate');
        echo view('front/footer_view');

    }
}