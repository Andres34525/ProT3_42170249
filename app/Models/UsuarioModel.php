<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    // Campos que pueden ser insertados o actualizados
    protected $allowedFields = [
        'nombre',
        'apellido',
        'usuario',
        'email',
        'password',
        'creado_en',
        'actualizado_en'
    ];

    // Activar timestamps automáticos
    protected $useTimestamps = true;
    protected $createdField  = 'creado_en';
    protected $updatedField  = 'actualizado_en';
}
