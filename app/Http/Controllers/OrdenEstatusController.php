<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Orden_estatus;
class OrdenEstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus=Orden_estatus::all();
        $estatus=Orden_estatus::paginate(7);
        return view('orden_estatus.index', compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('orden_estatus.create');
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
        Orden_estatus::create($request->all());
        return redirect()->route('orden-estatus.create')
        ->with('success','Estatus: '.$request->ocupacion.', ¡Creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=Orden_estatus::find($id);
        return  view('orden_estatus.show',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=Orden_estatus::find($id);
        return view('orden_estatus.edit',compact('dato'));
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
 
        Orden_estatus::find($id)->update($request->all());
        return redirect()->route('orden-estatus.index')
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
        //
    }
}
