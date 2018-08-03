<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden_Estatus extends Model
{

    protected $table ='orden__estatuses'; 
    
    protected $primaryKey ='id'; 

    protected $fillable = [
       'estatus', 'descripcion',
    ]; 
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
 