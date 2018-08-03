<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    protected $table ='ocupacions'; 
    
    protected $primaryKey ='id'; 

    protected $fillable = [
        'ocupacion', 'descripcion',
    ]; 
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
 
