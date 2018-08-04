<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocupacion;
class OcupacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocupaciones=Ocupacion::all();
        $ocupaciones=Ocupacion::paginate(7);
        return view('ocupaciones.index', compact('ocupaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ocupaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ocupacion=new Ocupacion;
        $ocupacion->ocupacion=$request->ocupacion;
        $ocupacion->descripcion=$request->descripcion;
        $ocupacion->user_id=\Auth::user()->id;
        $ocupacion->save();
        
        return redirect()->route('ocupacion.index')
        ->with('success','Ocupación: '.$request->ocupacion.', ¡Creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ocupacion=Ocupacion::find($id);
        return  view('ocupaciones.show',compact('ocupacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ocupacion=Ocupacion::find($id);
        return view('ocupaciones.edit',compact('ocupacion'));
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

        Ocupacion::find($id)->update($request->all());
        return redirect()->route('ocupacion.index')
        ->with('success','Ocupación: '.$request->ocupacion.', ¡Actualizada satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ocupacion::find($id)->delete();
        return redirect()->route('ocupacion.index')
        ->with('success','Ocupación eliminada satisfactoriamente!');
    }
}
