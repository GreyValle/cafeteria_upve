<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Orden_estatus;
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
        $estatus=Orden_estatus::paginate(7);
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

        return redirect()->route('orden_estatus.index')
        ->with('success','Estatus: '.$request->estatus.', ¡Creado satisfactoriamente!');
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
        $estatus=Orden_estatus::find($id);
        return view('orden_estatus.edit',compact('estatus'));
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
        return redirect()->route('orden_estatus.index')
        ->with('success','Estatus: '.$request->estatus.', ¡Actualizado satisfactoriamente!');
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
        return redirect()->route('orden_estatus.index')
        ->with('success','Estatus eliminad satisfactoriamente!');
    }
}
