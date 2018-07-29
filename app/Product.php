<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'id','nombre', 'descripcion','ingredientes',
        'precio','id_empleado', 'estatus', 'imagen'
    ]; 
}
