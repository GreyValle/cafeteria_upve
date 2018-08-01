<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable=[
    	'rol','descripcion','created_at','updated_at'
    ];

    public function users()
{
    return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
}

}
