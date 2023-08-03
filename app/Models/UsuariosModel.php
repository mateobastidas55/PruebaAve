<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'nombre',
        'apellido',
        'ciudad',
        'direccion',
        'celular',
        'cedula_base64',
        'correo',
        'contraseña',
    ];

    protected $table = 'usuarios';
}
