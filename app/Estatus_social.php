<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus_social extends Model
{
    protected $table ='estatus_socials'; 
    
    protected $primaryKey ='id'; 

    protected $fillable = [
        'estatus', 'descripcion',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
