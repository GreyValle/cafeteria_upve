<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable = [
        'nombre', 'apellidos', 'direccion',
        'fecha_nac', 'telefono', 'sexo',
        'id_escolaridad', 'id_estatus_social', 'hijos',
        'puesto', 'sueldo', 'nss',
        'id_tipo_sangre', 'estatus',
    ];
}


