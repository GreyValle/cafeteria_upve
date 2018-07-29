<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
class RolesvueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Roles::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol=new Roles();
        // dd($request);
        $rol=Roles::create($request->all());
            
        return $rol;
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
        $rol= Roles::find($id);
        $rol->rol=$request->rol;
        $rol->descripcion=$request->descripcion;
        if ($rol->save()) {
            return Roles::find($id);
        }
        
        // return $rol;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol= Roles::find($id); 
        $rol->delete();
    }
}
