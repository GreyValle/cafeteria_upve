@extends('layouts.app')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-10">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <div class="row">
	      	<div class="col-sm-6">
          		<h2 class="float-left"> Estatus orden</h2>   			
	        </div>
	        <div class="col-sm-6">         	
	         <a href="{{ route('orden_estatus.create') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes añadir una nuevo estatus!" data-placement="left">Añadir estatus</a> 
	        </div>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
          {{-- @include('Proveedor.frangment.info') --}}
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Estatus</th>
                  <th>Descripción</th>
                  <th colspan="3">Acciones</th>   
                </tr>
              </thead>
              <tbody>
                @if($estatus->count())  
                  @foreach($estatus as $estatu)  
                    <tr>
                      <td>{{$estatu->id}}</td>
                      <td>{{$estatu->estatus}}</td>
                      <td>{{$estatu->descripcion}}</td>                      
                      <td><a class="btn btn-outline-secondary btn-xs" href="{{action('OrdenEstatusController@show', $estatu->id)}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                      <td><a class="btn btn-outline-primary btn-xs" href="{{action('OrdenEstatusController@edit', $estatu->id)}}" ><i class="fa fa-edit"></i></span></a></td>
                      <td>
                         {{-- @if(Auth::user()->hasRole('admin')) --}}
                        <form action="{{action('OrdenEstatusController@destroy', $estatu->id)}}" method="POST">
                           {{csrf_field()}}
                           <input name="_method" type="hidden" value="DELETE">
         
                           <button class="btn btn-outline-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        {{-- @endif   --}}
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
          <div class="row">
            <div class="col-sm-6 align-items-center">{{ $estatus->links() }}</div>        
            <div class="col-sm-6" style="text-align: right;"><a href="#" title="Eliminar" data-toggle="popover" data-placement="left" data-content="Para eliminar solo click en boton rojo">Ayuda</a> </div>
          </div>      
        </div>      
      </div>
    </div>
  </div>

@endsection