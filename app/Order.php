<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'id_cliente', 'id_producto',
        'total','fecha_entregar','hora_entregar',
        'id_estatus'
    ]; 
}
