<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_sangre extends Model
{
    protected $fillable=[
    	'tipo_sangre','user_id',
    ];
}
