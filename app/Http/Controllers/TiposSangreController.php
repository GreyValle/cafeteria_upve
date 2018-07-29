<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_sangre;

class TiposSangreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sangres=Tipo_sangre::all();
        $sangres=Tipo_sangre::paginate(7);
        return view('tipos_sangre.index', compact('sangres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('tipos_sangre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[ 'tipo_sangre'=>'required']);

        // dd($request);
        Tipo_sangre::create($request->all());
        return redirect()->route('tipos-sangre  .create')
        ->with('success','Tipo sangre: '.$request->rol.', ¡Creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=Tipo_sangre::find($id);
        return  view('tipos_sangre.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=Tipo_sangre::find($id);
        return view('tipos_sangre.edit',compact('dato'));
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
        $this->validate($request,[ 'tipo_sangre'=>'required' ]);
 
        Tipo_sangre::find($id)->update($request->all());
        return redirect()->route('tipos-sangre.index')
        ->with('success','Tipo: '.$request->tipo_sangre.', ¡Actualizado satisfactoriamente!');
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
