<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridad extends Model
{
    protected $table ='escolaridads'; 
    
    protected $primaryKey ='id'; 
    
    protected $fillable = [
        'escolaridad', 'descripcion',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
