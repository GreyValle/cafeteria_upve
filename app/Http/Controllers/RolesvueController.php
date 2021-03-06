<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;
class RolesvueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comentarios::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comentario=new Comentarios();
        // dd($request);
        $comentario=Comentarios::create($request->all());
            
        return $comentario;
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
        $comentario= Comentarios::find($id);
        $comentario->comentario=$request->comentario;
        $comentario->descripcion=$request->descripcion;
        if ($comentario->save()) {
            return Comentarios::find($id);
        }
        
        // return $comentario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario= validarRespuesta_9::find($id); 
        $comentario->delete();
    }
}
