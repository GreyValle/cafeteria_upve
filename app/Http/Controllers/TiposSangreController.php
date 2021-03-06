<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_sangre;
use Alert;
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
        $sangre=new Tipo_sangre;
        $sangre->tipo_sangre=$request->tipo_sangre;
        $sangre->user_id=\Auth::user()->id;
        $sangre->save();
        Alert::success('Tipo sangre: '.$sangre->tipo_sangre,'¡Creado satisfactoriamente!');
        return redirect()->route('tipo_sangre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sangre=Tipo_sangre::find($id);
        return  view('tipos_sangre.show',compact('sangre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sangre=Tipo_sangre::find($id);
        return view('tipos_sangre.edit',compact('sangre'));
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

        Tipo_sangre::find($id)->update($request->all());
        Alert::success('Tipo sangre: '.$request->tipo_sangre,'¡Actualizado satisfactoriamente!');
        return redirect()->route('tipo_sangre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipo_sangre::find($id)->delete();
        Alert::success('Eliminado correctamente');
        return redirect()->route('tipo_sangre.index');
    }
}
