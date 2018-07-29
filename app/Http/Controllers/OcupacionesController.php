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
         $this->validate($request,[ 'ocupacion'=>'required', 'descripcion'=>'required']);

        // dd($request);
        Ocupacion::create($request->all());
        return redirect()->route('ocupaciones.create')
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
       $dato=Ocupacion::find($id);
        return  view('ocupaciones.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $request->user()->authorizeRoles(['admin','user']);
        $dato_ocupacion=Ocupacion::find($id);
        return view('ocupaciones.edit',compact('dato_ocupacion'));
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

        // $request->user()->authorizeRoles(['admin','user']);
        $this->validate($request,[ 'ocupacion'=>'required', 'descripcion'=>'required', ]);
 
        Ocupacion::find($id)->update($request->all());
        return redirect()->route('ocupaciones.index')
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
        //
    }
}
