<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    // Muestra el formulario
    public function ()
    {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/empleados/registrate');
        echo view('front/footer_view');
    }

    // Valida y guarda el registro
    public function formValidation()
    {
        $input = $this->validate([
            'nombre_completo' => 'required|min_length[3]|max_length[50]',
            'email'           => 'required|valid_email|is_unique[empleados.email]',
            'usuario'         => 'required|min_length[4]|max_length[30]',
            'password'        => 'required|min_length[5]|max_length[20]',
        ]);

        $formModel = new usuario_model();

        if (!$input) {
            // Si falla la validacion, vuelve al formulario con los errores
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/empleados/registrate', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            // Guarda en la base de datos
            $formModel->save([
                'nombre_completo' => $this->request->getPost('nombre_completo'),
                'email'           => $this->request->getPost('email'),
                'usuario'         => $this->request->getPost('usuario'),
                'password'        => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'created_at'      => date('Y-m-d H:i:s'),
            ]);

            session()->setFlashdata('success', 'Registro exitoso');
            return redirect()->to(base_url('/login'));
        }
    }
}
