<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuario_controller extends BaseController
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        return view('usuarios/lista', $data);
    }

    public function crear()
    {
        return view('usuarios/crear');
    }

    public function guardar()
    {
        $model = new UsuarioModel();
        $model->save([
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'usuario'   => $this->request->getPost('usuario'),
            'password'  => $this->request->getPost('password')
        ]);
        return redirect()->to('/usuarios');
    }

    public function editar($id)
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new UsuarioModel();
        $model->update($id, [
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'usuario'   => $this->request->getPost('usuario'),
            'email'     => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password')
        ]);
        return redirect()->to('/usuarios');
    }

    public function eliminar($id)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}
