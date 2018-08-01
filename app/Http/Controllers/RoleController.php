<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;

use Caffeinated\Shinobi\Models\Permission;

use App\User;
use Auth;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles= Role::paginate(10);

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
        // $user=Auth::user()->id;
        // dd( $user);
        $role=new Role;
        $role->name=$request->name;
        $role->description=$request->description;
        $role->id_user=Auth::user()->id;
        $role->save();
        // $role=Role::create($request->all()); 

        $role->permissions()->sync($request->get('permissions')); 
        return redirect()->route('roles.index')
        ->with('info','Role actualizado con éxito');
      
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $role=Role::find($id)->user; 
        dd($role);
        $user=User::where('id',$role->id_user)->get(); 
       

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
        return back()->with('info','Eliminado correctamente');
    }
}
