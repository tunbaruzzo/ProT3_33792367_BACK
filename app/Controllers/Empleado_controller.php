<?php

namespace App\Controllers;

use App\Models\empleado_model;
use CodeIgniter\Controller;

class Empleado_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    // Muestra el formulario de registro
    public function registrate()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
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

        $formModel = new empleado_model();

        if (!$input) {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('back/empleados/registrate', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre_completo' => $this->request->getPost('nombre_completo'),
                'email'           => $this->request->getPost('email'),
                'usuario'         => $this->request->getPost('usuario'),
                'password'        => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'created_at'      => date('Y-m-d H:i:s'),
            ]);

            session()->setFlashdata('success', 'Registro exitoso. ¡Bienvenido!');
            return redirect()->to(base_url('/login'));
        }
    }

    // Muestra el formulario de login
    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('back/empleados/login');
        echo view('front/footer_view');
    }

    // Procesa la autenticación
    public function auth()
    {
        $session = session();
        $model = new empleado_model();

        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $user = $model->where('usuario', $usuario)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id_empleado'     => $user['id_empleado'],
                    'usuario'         => $user['usuario'],
                    'nombre_completo' => $user['nombre_completo'],
                    'perfil_id'       => $user['perfil_id'],
                    'logged_in'       => true,
                ]);
                return redirect()->to(base_url('/principal'));
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta.');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('error', 'El usuario no existe.');
            return redirect()->to(base_url('/login'));
        }
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }

    // Muestra todos los empleados (solo para perfiles autorizados)
    public function index()
    {
    $session = session();
    $perfil = $session->get('perfil_id');

    // Solo permitir si es admin o despues quizas otro perfil mas (por ejemplo: [1,3])
    if (!in_array($perfil, [1])) {
        return redirect()->to(base_url('/principal'));
    }

    $model = new empleado_model();
    $data['empleados'] = $model->findAll();

    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('back/empleados/listado', $data);
    echo view('front/footer_view');
    }

    //ver-actualizar-eliminar
    //ver
    public function edit($id = null)
    {
    $session = session();
    $perfil = $session->get('perfil_id');

    if (!in_array($perfil, [1])) {
        return redirect()->to(base_url('/principal'));
    }

    $model = new empleado_model();
    $data['empleado'] = $model->find($id);

    if (!$data['empleado']) {
        return redirect()->to(base_url('/empleados'))->with('error', 'Empleado no encontrado.');
    }

    echo view('front/head_view');
    echo view('front/navbar_view');
    echo view('back/empleados/editar', $data);
    echo view('front/footer_view');
    }
    //actualizar
    public function update($id = null)
    {
    $session = session();
    $perfil = $session->get('perfil_id');

    if (!in_array($perfil, [1])) {
        return redirect()->to(base_url('/principal'));
    }

    $model = new empleado_model();

    $data = [
        'nombre_completo' => $this->request->getPost('nombre_completo'),
        'email'           => $this->request->getPost('email'),
        'usuario'         => $this->request->getPost('usuario'),
        'perfil_id'       => $this->request->getPost('perfil_id'),
    ];

    $model->update($id, $data);
    return redirect()->to(base_url('/empleados'))->with('success', 'Empleado actualizado con éxito.');
    }
    //eliminar
    public function delete($id = null)
    {
    $session = session();
    $perfil = $session->get('perfil_id');

    if (!in_array($perfil, [1])) {
        return redirect()->to(base_url('/principal'));
    }

    $model = new empleado_model();
    $model->delete($id);

    return redirect()->to(base_url('/empleados'))->with('success', 'Empleado eliminado.');
    }


}

