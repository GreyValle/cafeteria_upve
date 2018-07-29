<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden_Estatus extends Model
{
    protected $fillable = [
        'estatus', 'descripcion',
    ]; 
}
 