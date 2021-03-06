<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;

use Caffeinated\Shinobi\Models\Permission;

use App\User;
use Auth;
use Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles= Role::paginate(7);

        return view('roles.index',compact('roles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::get();  
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=new Role;
        $role->name=$request->name;
        $role->description=$request->description;
        $role->id_user=Auth::user()->id;
        $role->save();
        $role->permissions()->sync($request->get('permissions')); 
        
        Alert::success('Rol: '.$role->name,'¡Creado satisfactoriamente!');
        return redirect()->route('roles.index');
      
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $role=Role::find($id);
        $user=User::orderBy('name','ASC')->pluck('name','id'); 

        return view('roles.show', compact('role','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::find($id);
        $permissions=Permission::get();         
        return view('roles.edit', compact('role','permissions'));
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
        $role=Role::find($id); 
        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions')); 

        Alert::success('¡Actualizado satisfactoriamente!');
        return redirect()->route('roles.index')
        ->with('info','Role actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::find($id);
        $role->delete();
        Alert::success('Eliminado correctamente');
        return back()->with('info','Eliminado correctamente');
    }
}
