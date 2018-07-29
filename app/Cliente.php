<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'direccion',
        'fecha_nac', 'telefono', 'sexo',
        'id_escolaridad', 'id_estatus_social', 'hijos',
        'id_ocupacion', 'saldo', 'estatus',
    ];
}