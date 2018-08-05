<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::paginate(7);
    
        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id');

        return view('orders.index',compact('orders','estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    //
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orden=new Order;
        $orden->product_id=$request->product_id;
        $orden->user_id=\Auth::user()->id;
        $orden->total=$request->total;
        $orden->fecha_entregar=$request->fecha_entregar;
        $orden->hora_entregar=$request->hora_entregar;
        $orden->save();
        $user=\App\User::find(\Auth::user()->id);
        $saldo=$user->saldo-$request->total;
        $user->saldo=$saldo;
        $user->update($request->all());

        return redirect()->route('products.index')->with('success','¡Orden creada satisfactoriamente!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $orden=Order::find($id);
        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id');
        return  view('orders.show',compact('orden','estatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orden=Order::find($id);
        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id'); 
        $productos=\App\Product::orderBy('nombre','ASC')->pluck('nombre','id'); 
        $users=\App\User::orderBy('name','ASC')->pluck('name','id'); 
        return view('orders.edit', compact('orden','estatus','productos','users'));
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
        $orden=Order::find($id);
        $orden->update($request->all());

        return redirect()->route('orders.show',$id)
        ->with('info','Orden actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orden=Order::find($id);
        $orden->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
