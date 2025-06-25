<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Login_controller extends BaseController
{
    public function index()
    {
        return view('login'); // Asegúrate que la vista esté en /views/login.php
    }

    public function login()
    {
        $model = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $model->where('email', $email)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            session()->set('usuario', $usuario);
            return redirect()->to('/usuarios');
        } else {
            return redirect()->back()->with('error', 'Datos incorrectos');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
