@extends('layouts.app')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-10">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <h2 class="float-left"> Ordenes </h2>        
        </div>
        <div class="card-body ">
          <div class="table-responsive">
          {{-- @include('Proveedor.frangment.info') --}}
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>Cliente</th>
                  <th>Orden</th>
                  <th>Fecha Entregar</th>
                  <th>Hora Entregar</th>
                  <th>Estatus</th>
                  <th colspan="1">Acciones</th>   
                </tr>
              </thead>
              <tbody>
                @if($ordenes->count())  
                  @foreach($ordenes as $orden)  
                    <tr>
                      <td>{{$orden->id_cliente}}</td>
                      <td>{{$orden->id_producto}}</td>                     
                      <td>{{$orden->fecha_entregar}}</td>                     
                      <td>{{$orden->hora_entregar}}</td>                     
                      <td>{{$orden->id_estatus}}</td>                     
                      <td><a class="btn btn-outline-secondary btn-xs" href="{{action('OrdersController@update',$orden->id)}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                      </td>
                    </tr>
                   @endforeach 
                @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div> <br>            
   
         {{-- {{ $ordenes->links() }}>         --}}
            
        </div>      
      </div>
    </div>
  </div>

@endsection