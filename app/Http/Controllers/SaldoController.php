<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SaldoController extends Controller
{
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        
        return redirect()->route('users.show', $id)
        ->with('info','Usuario actualizado con éxito');
    }
}
