<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use Alert;
class ComentarioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comentario::all();
    }
     
      public function index_2()
    {
        $comentarios=Comentario::paginate(10);
        $users=\App\User::all();

        return view('comentarios.index',compact('comentarios','users')); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comentario=new Comentario();
        // dd($request);
        // $comentario=Comentario::create($request->all());
        $comentario->comentario=$request->comentario;
        $comentario->descripcion=$request->descripcion;
        $comentario->user_id=\Auth::user()->id;
        $comentario->save();
            
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
        $comentario= Comentario::find($id);
        $comentario->comentario=$request->comentario;
        $comentario->descripcion=$request->descripcion;
        if ($comentario->save()) {
            return Comentario::find($id);
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

        $comentario= Comentario::find($id); 
        $comentario->delete();
    }
    
    public function destroy_2($id)
    {

        Comentario::find($id)->delete();
        Alert::success('¡Eliminado satisfactoriamente!');
        return redirect()->route('comentarios.index_2');

    }
}
