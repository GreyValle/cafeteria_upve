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
 
        $estatus_social=new Estatus_social;
        $estatus_social->estatus=$request->estatus;
        $estatus_social->descripcion=$request->descripcion;
        $estatus_social->user_id=\Auth::user()->id;
        $estatus_social->save();

        return redirect()->route('estatus_social.index')
        ->with('success','Estatus social: '.$request->estatus.', ¡Creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estatus=Estatus_social::find($id);
        return  view('estatus_social.show',compact('estatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $estatus_social=Estatus_social::find($id);
        // dd($estatus_social);
        return view('estatus_social.edit',compact('estatus_social'));
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
        $this->validate($request,[ 'estatus'=>'required', 'descripcion'=>'required', ]);
        $estatus_social=Estatus_social::find($id);
        $estatus_social->estatus=$request->estatus;
        $estatus_social->descripcion=$request->descripcion;
        $estatus_social->save();

        return redirect()->route('estatus_social.index')
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
        Estatus_social::find($id)->delete();
        return redirect()->route('estatus_social.index')
        ->with('success','Estatus eliminada satisfactoriamente!');
    }
}
