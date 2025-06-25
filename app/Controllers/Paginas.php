<?php

namespace App\Controllers;

class Paginas extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function receta()
    {
        return view('receta');
    }

    public function enviar()
    {
        return view('enviar');
    }

    public function quienes()
    {
        return view('quienes');
    }

    public function acerca()
    {
        return view('acerca');
    }

    public function registro()
    {
        return view('registro');
    }

    public function login()
    {
        return view('login');
    }
}
