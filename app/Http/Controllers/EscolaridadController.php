<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escolaridad;
class EscolaridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['admin','user']);

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
        $this->validate($request,[ 'escolaridad'=>'required', 'descripcion'=>'required']);

        // dd($request);
        Escolaridad::create($request->all());
        return redirect()->route('escolaridad.create')
        ->with('success','Escolaridad: '.$request->nombre.', ¡Creada satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $dato=Escolaridad::find($id);
        return  view('escolaridad.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // $request->user()->authorizeRoles(['admin','user']);
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
        // $request->user()->authorizeRoles(['admin','user']);
        $this->validate($request,[ 'escolaridad'=>'required', 'descripcion'=>'required', ]);
 
        Escolaridad::find($id)->update($request->all());
        return redirect()->route('escolaridad.index')
        ->with('success','Escolaridad: '.$request->escolaridad.', ¡Actualizada satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escolaridad=Escolaridad::findOrFail($id);
        $escolaridad->delete();
        return view('escolaridad.index');
    }
}
