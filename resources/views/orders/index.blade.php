@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <STRONG>Ordenes</STRONG>
          @can('orders.index')
            <a href="{{ route('orders.index') }}" class="btn btn-sm btn-primary float-right">Refrescar</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Cliente</th>
                  <th>Menú</th>
                  {{-- <th>Total</th> --}}
                  <th>Entregar</th>
                  <th>Hora</th>
                  <th>Estatus</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($orders->count())  
                  @foreach($orders as $orden)  
                    <tr>
                      <td>{{$orden->id}}</td>
                      <td>
                        <a href="/users/{{ $orden->user->id}}">{{$orden->user->name}}</a>
                      </td>
                      <td>
                        <a href="/products/{{ $orden->product->id}}">{{$orden->product->nombre}}</a>
                      </td>   
                      {{-- <td>$ {{$orden->total}}</td>                       --}}
                      <td>{{$orden->fecha_entregar}}</td>               
                      <td>{{$orden->hora_entregar}}</td>                    
                      <td>
                        {{-- <a href="/orden_estatus/{{ $orden->orden_estatus->id}}">{{$orden->orden_estatus->estatus}}</a> --}}
   
                        <div class="form-group">
                         <a href="/orden_estatus/{{ $orden->orden_estatus->id}}">{{$orden->orden_estatus->estatus}}</a>

                        </div>
                      </td>

                      @can('orders.show')
                        <td width="10px"><a class="btn btn-outline-secondary btn-sm" href="{{action('OrdersController@show', $orden->id)}}" >Ver</a></td>
                      @endcan
                      @can('orders.edit')
                        <td width="10px"><a class="btn btn-outline-primary btn-sm" href="{{action('OrdersController@edit', $orden->id)}}">Editar</a></td>
                      @endcan
                      @can('orders.destroy')
                        <td width="10px">
                          <form action="{{action('OrdersController@destroy', $orden->id)}}" method="POST">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                     
                            <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
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
            {{ $orders->render() }}
          </div>      
        </div> 
      </div>
    </div>
  </div>

@endsection