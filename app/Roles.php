<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable=[
    	'rol','descripcion','user_id','created_at','updated_at'
    ];


    public function user(){
    	return $this->belongsTo('App\User');
    }

}
