@extends('layouts.app')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-10">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <div class="row">
	      	<div class="col-sm-6">
          		<h2 class="float-left"> Lista Ocupaciones </h2>   			
	        </div>
	        <div class="col-sm-6">         	
	         <a href="{{ route('ocupaciones.create') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes añadir una nueva ocupación!" data-placement="left">Añadir ocupación</a> 
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
                  <th>Ocupación</th>
                  <th>Descripción</th>
                  <th colspan="3">Acciones</th>   
                </tr>
              </thead>
              <tbody>
                @if($ocupaciones->count())  
                  @foreach($ocupaciones as $ocupacion)  
                    <tr>
                      <td>{{$ocupacion->id}}</td>
                      <td>{{$ocupacion->ocupacion}}</td>
                      <td>{{$ocupacion->descripcion}}</td>                      
                      <td><a class="btn btn-outline-secondary btn-xs" href="{{action('OcupacionesController@show', $ocupacion->id)}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                      <td><a class="btn btn-outline-primary btn-xs" href="{{action('OcupacionesController@edit', $ocupacion->id)}}" ><i class="fa fa-edit"></i></span></a></td>
                      <td>
                         {{-- @if(Auth::user()->hasRole('admin')) --}}
                        <form action="{{action('OcupacionesController@destroy', $ocupacion->id)}}" method="POST">
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
            <div class="col-sm-6 align-items-center">{{ $ocupaciones->links() }}</div>        
            <div class="col-sm-6" style="text-align: right;"><a href="#" title="Eliminar" data-toggle="popover" data-placement="left" data-content="Para eliminar solo click en boton rojo">Ayuda</a> </div>
          </div>      
        </div>      
      </div>
    </div>
  </div>

@endsection