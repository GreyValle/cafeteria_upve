@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card box-shadow">
        <div class="card-header" style="font-size: large;">
          <STRONG>Todos Productos</STRONG>
          @can('products.index_todos_tabla')
            <a href="{{ route('products.index_todos_tabla') }}" class="btn btn-sm btn-outline-secondary float-right">Refrescar</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Autor</th>
                  <th>Estatus</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($products->count())  
                  @foreach($products as $product)  
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{ $product->nombre }}</td>
                      <td>{{ $product->precio }}</td>
                      <td>
                        <a href="/users/{{ $product->user->id}}">{{$product->user->name}}</a>
                      </td>
                      @php
                          if ($product->estatus==1) {
                            $estatus="Activado";
                          }
                          else{
                            $estatus="Desactivado";
                          }
                      @endphp   
                      <td>{{ $estatus }}</td>
                      @can('products.show')
                        <td width="10px"><a class="btn btn-outline-secondary btn-sm" href="{{action('ProductsController@show', $product->id)}}" >Ver</a></td>
                      @endcan
                      @can('products.edit')
                        <td width="10px"><a class="btn btn-sm btn-outline-secondary" href="{{action('ProductsController@edit', $product->id)}}">Editar</a></td>
                      @endcan
                      @can('products.destroy')
                        <td width="10px">
                          <form action="{{action('ProductsController@destroy', $product->id)}}" method="POST">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                     
                            <button class="btn btn-sm btn-outline-secondary" type="submit">Eliminar</button>
                          </form>
                        </td>
                      @endcan
                    </tr>
                   @endforeach 
                @else
                  <tr>
                    <td colspan="8"> ¡No hay registros!</td>
                  </tr>
                @endif
              </tbody>
            </table>
            <hr>            
          </div>
          <div class="row justify-content-center">
            {{ $products->render() }}
          </div>      
        </div> 
      </div>
    </div>
  </div>

@endsection