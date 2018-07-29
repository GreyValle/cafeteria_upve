<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estatus_social;
class EstatusSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus=Estatus_social::all();
        $estatus=Estatus_social::paginate(7);
        return view('estatus_social.index',compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('estatus_social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'estatus'=>'required', 'descripcion'=>'required']);

        // dd($request);
        Estatus_social::create($request->all());
        return redirect()->route('estatus-social.create')
        ->with('success','Estatus social: '.$request->nombre.', ¡Creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=Estatus_social::find($id);
        return  view('estatus_social.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estatus=Estatus_social::find($id);
        return view('estatus_social.edit',compact('estatus'));
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
        $this->validate($request,[ 'estatus'=>'required', 'descripcion'=>'required', ]);
 
        Estatus_social::find($id)->update($request->all());
        return redirect()->route('estatus-social.index')
        ->with('success','Estatus: '.$request->escolaridad.', ¡Actualizado satisfactoriamente!');
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
