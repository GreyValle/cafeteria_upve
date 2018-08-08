<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escolaridad;
use Alert;

class EscolaridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $escolaridades=Escolaridad::all();
        $escolaridades=Escolaridad::paginate(7);
        return view('escolaridad.index',compact('escolaridades')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('escolaridad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $escolaridad=new Escolaridad;
        $escolaridad->escolaridad=$request->escolaridad;
        $escolaridad->descripcion=$request->descripcion;
        $escolaridad->user_id=\Auth::user()->id;
        $escolaridad->save();
        Alert::success('Escolaridad: '.$request->escolaridad, '¡Creada satisfactoriamente!');
        return redirect()->route('escolaridad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escolaridad=Escolaridad::find($id);
        return  view('escolaridad.show',compact('escolaridad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $escolaridad=Escolaridad::find($id);
        return view('escolaridad.edit',compact('escolaridad'));
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
        $this->validate($request,[ 'escolaridad'=>'required', 'descripcion'=>'required', ]);

        $escolaridad=Escolaridad::find($id);
        $escolaridad->escolaridad=$request->escolaridad;
        $escolaridad->descripcion=$request->descripcion;
        $escolaridad->save();
        Alert::success('Escolaridad: '.$request->escolaridad, '¡Actualizada satisfactoriamente!');
        return redirect()->route('escolaridad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Escolaridad::find($id)->delete();
        Alert::success('¡Escolaridad eliminada satisfactoriamente!');
        return redirect()->route('escolaridad.index');
    }
}
