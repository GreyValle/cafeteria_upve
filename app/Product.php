<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products'; 
    
    protected $primaryKey ='id'; 

    protected $fillable = [
        'id','nombre', 'descripcion','ingredientes',
        'precio','user_id', 'estatus', 'imagen'
    ];

        public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
