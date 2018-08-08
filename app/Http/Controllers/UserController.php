<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Escolaridad;
use App\Estatus_social;
use App\Ocupacion;
use App\Tipo_sangre;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::paginate(10);

        return view('users.index',compact('users'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        $escolaridades=Escolaridad::orderBy('id','ASC')->pluck('escolaridad','id');  
        $estatus=Estatus_social::orderBy('estatus','ASC')->pluck('estatus','id'); 
        $ocupaciones=Ocupacion::orderBy('ocupacion','ASC')->pluck('ocupacion','id'); 
        $sangres=Tipo_sangre::orderBy('tipo_sangre','ASC')->pluck('tipo_sangre','id');

        return view('users.show', compact('user','escolaridades','estatus','ocupaciones','sangres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $roles=Role::get();  
        $escolaridades=Escolaridad::orderBy('id','ASC')->pluck('escolaridad','id');
        $estatus=Estatus_social::orderBy('estatus','ASC')->pluck('estatus','id'); 
        $ocupaciones=Ocupacion::orderBy('ocupacion','ASC')->pluck('ocupacion','id'); 
        $sangres=Tipo_sangre::orderBy('tipo_sangre','ASC')->pluck('tipo_sangre','id');

        return view('users.edit', compact('user','roles','escolaridades','estatus','ocupaciones','sangres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->get('roles')); 
        
        Alert::success('Usuario: '.$user->name,'Usuario actualizado con éxito');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        Alert::success('Eliminado correctamente');
        return back();
    }
}
