<?php

namespace App\Controllers;

// Última actualización: protección de rutas y sesión de usuarios (Tramo 3)

use App\Models\UsuarioModel;

class Usuario_controller extends BaseController
{
    public function index()
    {
        // Solo si hay sesión iniciada
        if (!session()->has('usuario')) {
            return redirect()->to('/login');
        }

        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        return view('usuarios/lista', $data);
    }

    public function crear()
    {
        return view('registro');
    }

    public function guardar()
    {
        $model = new UsuarioModel();

        $model->save([
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email'    => $this->request->getPost('email'),
            'usuario'  => $this->request->getPost('usuario'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        // Mostrar mensaje y redirigir al login
        return redirect()->to('/login')->with('success', 'Registro exitoso. Inicie sesión para continuar.');
    }

    public function editar($id)
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/login');
        }

        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/editar', $data);
    }

    public function actualizar($id)
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/login');
        }

        $model = new UsuarioModel();

        // Buscar usuario actual
        $usuario = $model->find($id);

        // Si se ingresó una nueva contraseña
        $passwordInput = $this->request->getPost('password');
        $password = $passwordInput ? password_hash($passwordInput, PASSWORD_DEFAULT) : $usuario['password'];

        $model->update($id, [
            'nombre'   => $this->request->getPost('nombre'),
            'email'    => $this->request->getPost('email'),
            'password' => $password
        ]);

        return redirect()->to('/usuarios');
    }

    public function eliminar($id)
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/login');
        }

        $model = new UsuarioModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}
