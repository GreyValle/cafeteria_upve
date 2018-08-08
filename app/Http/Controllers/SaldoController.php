<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
class SaldoController extends Controller
{
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        Alert::success('Cliente: '.$user->name.' Saldo: '.$user->saldo,'Saldo actualizado con éxito');
        return redirect()->route('users.show', $id);
    }
}
