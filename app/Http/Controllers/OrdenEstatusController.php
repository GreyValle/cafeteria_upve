<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Orden_estatus;
use Alert;
class OrdenEstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus=Orden_estatus::all();
        return view('orden_estatus.index', compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('orden_estatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estatus=new Orden_estatus;
        $estatus->estatus=$request->estatus;
        $estatus->descripcion=$request->descripcion;
        $estatus->user_id=\Auth::user()->id;
        $estatus->save();
        Alert::success('Estatus: '.$request->estatus, '¡Creada satisfactoriamente!');
        return redirect()->route('orden_estatus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $estatus=Orden_estatus::find($id);
        return  view('orden_estatus.show',compact('estatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estatu=Orden_estatus::find($id);
        return view('orden_estatus.edit',compact('estatu'));
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
        Orden_estatus::find($id)->update($request->all());
        Alert::success('Estatus: '.$request->estatus, '¡Actualizado satisfactoriamente!');
        return redirect()->route('orden_estatus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orden_estatus::find($id)->delete();
        Alert::success('¡Estatus eliminado satisfactoriamente!');
        return redirect()->route('orden_estatus.index');
    }
}
