<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','saldo', 'telefono',
        'escolaridad_id', 'estatus_social_id', 'ocupacion_id',
        'tipo_sangre_id', 'estatus'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function escolaridad(){
        return $this->belongsTo('App\Escolaridad');
    }
    public function estatus_social(){
        return $this->belongsTo('App\Estatus_social');
    }
    public function ocupacion(){
        return $this->belongsTo('App\Ocupacion');
    }
    public function tipo_sangre(){
        return $this->belongsTo('App\Tipo_sangre');
    }
    public function users()
    {
        return $this->belongsToMany(config('auth.model') ?: config('auth.providers.users.model'))->withTimestamps();
    }
}
