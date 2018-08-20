<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Alert;
use Mail;
use DB;
use Carbon\Carbon;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $carbon=new Carbon();
        $date=Carbon::now();
        $date=$date->format('Y-m-d');

        // dd($date);
        $orders=Order::where('fecha_entregar','=',$date)->where('orden_estatus_id','=',1)->orderBy('orden_estatus_id','ASC')->orderBy('hora_entregar','ASC')->paginate(10);

        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id');

        return view('orders.index',compact('orders','estatus'));
    }

    public function index_todas()
    {
        $orders=Order::paginate(10);

        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id');

        return view('orders.index_todas',compact('orders','estatus'));
    }

      public function index_cliente()
    {
        $orders=Order::where('user_id','=',\Auth::user()->id)->orderBy('id','ASC')->paginate(5);

        $estatus=\App\Orden_estatus::orderBy('estatus','ASC')->pluck('estatus','id');

        return view('orders.index_cliente',compact('orders','estatus'));
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
        $orden->orden_estatus_id=1;
        $orden->save();
        
        $producto=DB::table('products')->select('nombre')->where('id','=',$orden->product_id)->first();

        $user=\App\User::find(\Auth::user()->id);
        $saldo=$user->saldo-$request->total;
        $user->saldo=$saldo;
        $user->update($request->all());
        
        $estatus=DB::table('orden__estatuses')->select('estatus')->where('id','=',$orden->orden_estatus_id)->first();
        // dd($estatus->estatus);
        
        $data= array(
            'cafeteria'=> 'Cafetería UPVE',
            'cliente'=>\Auth::user()->name,
            'orden'=>$orden->id,
            'producto'=>$producto->nombre,
            'total'=>$orden->total,
            'saldo'=>$saldo,
            'fecha_solicitada'=> $orden->fecha_entregar,
            'hora_solicitada'=> $orden->hora_entregar,
            'estatus_orden'=> $estatus->estatus,
        );
        Mail::send('emails.orden_create',$data,function($message){
                $message->from('greygarcia14.gg@gmail.com', 'Notificación de cafetería UPVE');
                $message->to(\Auth::user()->email)->subject('Detalles de su orden');
        });

        Alert::success('Se le notificará cuando su orden esté lista','¡Orden creada satisfactoriamente!')->persistent("Cerrar");

        return redirect()->route('products.index');
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
    private $cliente;
    public function update(Request $request, $id)
    {
        $orden=Order::find($id);
        $orden->update($request->all());
        
        $this->cliente=DB::table('users')->select('email','name')->where('id','=',$orden->user_id)->first();
        // dd($orden); 

        $producto=DB::table('products')->select('nombre')->where('id','=',$orden->product_id)->first();
        // dd($producto);
        $estatus=DB::table('orden__estatuses')->select('estatus')->where('id','=',$orden->orden_estatus_id)->first();
        // dd($estatus);

        $data= array(
            'cafeteria'=> 'Cafetería UPVE',
            'cliente'=> $this->cliente->name,
            'orden'=>$orden->id,
            'fecha_solicitada'=> $orden->fecha_entregar,
            'hora_solicitada'=> $orden->hora_entregar,
            'producto'=>$producto->nombre,
            'estatus_orden'=> $estatus->estatus,
        );
        Mail::send('emails.orden_update',$data,function($message){
                $message->from('greygarcia14.gg@gmail.com', 'Cambio en tu orden');
                $message->to($this->cliente->email)->subject('Revisa los cambios');
        });

        Alert::success('Orden: '.$orden->id,'¡Orden actualizada con éxito!');
        return redirect()->route('orders.show',$id);
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
         Alert::success('¡Orden eliminada con éxito!');
        return back();
    }
}
