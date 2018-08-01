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
        $escolaridad=new Escolaridad;
        $escolaridad->escolaridad=$request->escolaridad;
        $escolaridad->descripcion=$request->descripcion;
        $escolaridad->user_id=\Auth::user()->id;
        $escolaridad->save();
   
        return redirect()->route('escolaridad.index')
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
        $escolaridad=Escolaridad::find($id);
        // dd($escolaridad->user);
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
  
        Escolaridad::find($id)->delete();
        return redirect()->route('escolaridad.index')
        ->with('success','Escolaridad eliminada satisfactoriamente!');
    }
}
