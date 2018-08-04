<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders'; 
    
    protected $primaryKey ='id'; 

     protected $fillable = [
        'product_id', 'user_id','total',
        'fecha_entregar','hora_entregar',
        'orden_estatus_id'
    ]; 

    public function user(){
    	return $this->belongsTo('App\User');
    }
    
    public function product(){
    	return $this->belongsTo('App\Product');
    }
    
    public function orden_estatus(){
    	return $this->belongsTo('App\Orden_Estatus');
    }
}
