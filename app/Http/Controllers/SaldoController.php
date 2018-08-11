<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Mail;

class SaldoController extends Controller
{
    private $user=null;

    public function update(Request $request, $id)
    {

        $this->user=User::find($id);
        $this->user->saldo=$request->saldo+$request->saldo_abonado;
        $this->user->save();

        $data= array(
            'cafeteria'=> 'Cafetería UPVE',
            'saldo_abonado'=>$request->saldo_abonado,
            'saldo_viejo'=>$request->saldo,
            'saldo_actual'=>$request->saldo+$request->saldo_abonado,
            'cliente'=> $this->user->name,
        );
        
        Mail::send('emails.saldo_update',$data,function($message){
                $message->from('greygarcia14.gg@gmail.com', 'Notificación de cafetería UPVE');
                $message->to($this->user->email)->subject('Cambios en el saldo');
        });

        Alert::success('Cliente: '.  $this->user->name.' Saldo: '.  $this->user->saldo,'Saldo actualizado con éxito');
        return redirect()->route('users.show', $id);
    }
}
