<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection;
use Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['admin','user']);

        // $escolaridades=Escolaridad::all();
        $products=Product::paginate(12);

        if ($request->wantsJson()) {
            # code...
            return new ProductsCollection($products);
        }
        return view('products.index',compact('products')); 
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile=$request->hasFile('image') && $request->image->isValid();
        $product=new Product;
        $product->nombre=$request->nombre;
        $product->descripcion=$request->descripcion;
        $product->ingredientes=$request->ingredientes;
        $product->precio=$request->precio;
        $product->estatus=$request->estatus;
        $product->user_id=\Auth::user()->id;
        // dd($product->estatus);
        if ($hasFile) {
            $extension=$request->image->extension(); 
            $name='Cafeteria_'.$product->nombre.'_'.time().'.'.$extension;
            $product->imagen=$name; 
        }
        
        if ($product->save()) {
          
          if ($hasFile) {
              $request->image->storeAs('images', $name );
          }
        
        Alert::success('Menú: '.$product->nombre,'¡Creado satisfactoriamente!');
        return redirect()->route('products.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Product::find($id);
        
        return  view('products.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $producto=Product::find($id);
        return view('products.edit',compact('producto'));
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
        $product=Product::find($id);
        $product->nombre=$request->nombre;
        $product->descripcion=$request->descripcion;
        $product->ingredientes=$request->ingredientes;
        $product->precio=$request->precio;
        $product->estatus=$request->estatus;
        $hasFile=$request->hasFile('image') && $request->image->isValid();
        
        if ($hasFile) {
            $extension=$request->image->extension(); 
            $name='Cafeteria_'.$product->nombre.'_'.time().'.'.$extension;
            $product->imagen=$name; 
        }
        
        if ($product->save()) {
            if ($hasFile) {
              $request->image->storeAs('images', $name );
            }
            Alert::success('Menú: '.$product->nombre,'¡Actualizado satisfactoriamente!');
            return redirect()->route('products.index')->with('success','Producto: '.$request->nombre.', ¡Actualizado satisfactoriamente!');
        }else{
            return view('products.edit',['product'=>$product]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        Alert::success('¡Eliminado satisfactoriamente!');
        return redirect()->route('products.index');
    }
}
