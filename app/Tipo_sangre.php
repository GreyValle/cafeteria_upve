<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_sangre extends Model
{

    protected $table ='tipo_sangres'; 
    
    protected $primaryKey ='id'; 
    
    protected $fillable=[
    	'tipo_sangre','user_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
