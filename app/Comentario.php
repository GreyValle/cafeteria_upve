<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable=[
    	'comentario','descripcion','user_id','created_at','updated_at'
    ];


    public function user(){
    	return $this->belongsTo('App\User');
    }
}
