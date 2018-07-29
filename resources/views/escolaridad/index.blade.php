@extends('layouts.app')
@section('content')
{{-- <div>
  <products-component></products-component>
  
</div> --}}
  <div class="row justify-content-center">
    <div class="col-md-10">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <div class="row">
	      	<div class="col-sm-6">
          		<h2 class="float-left"> Lista Escolaridad </h2>   			
	        </div>
	        <div class="col-sm-6">         	
	         <a href="{{ route('escolaridad.create') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes añadir un nuevo proveedor!" data-placement="left">Añadir escolaridad</a> 
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
                  <th>Escolaridad</th>
                  <th>Descripción</th>
                  <th colspan="3">Acciones</th>   
                </tr>
              </thead>
              <tbody>
                @if($escolaridades->count())  
                  @foreach($escolaridades as $escolaridad)  
                    <tr>
                      <td>{{$escolaridad->id}}</td>
                      <td>{{$escolaridad->escolaridad}}</td>
                      <td>{{$escolaridad->descripcion}}</td>                      
                      <td><a class="btn btn-outline-secondary btn-xs" href="{{action('EscolaridadController@show', $escolaridad->id)}}" >Ver</a></td>

                      <td><a class="btn btn-outline-primary btn-xs" href="{{action('EscolaridadController@edit', $escolaridad->id)}}">Editar</a></td>
                      <td>
                         {{-- @if(Auth::user()->hasRole('admin')) --}}
                        <form action="{{action('EscolaridadController@destroy', $escolaridad->id)}}" method="POST">
                           {{csrf_field()}}
                           <input name="_method" type="hidden" value="DELETE">
         
                           <button class="btn btn-outline-danger btn-xs" type="submit">Eliminar</button>
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
            <div class="col-sm-6 align-items-center">{{ $escolaridades->links() }}</div>        
            <div class="col-sm-6" style="text-align: right;"><a href="#" title="Eliminar" data-toggle="popover" data-placement="left" data-content="Para eliminar solo click en boton rojo">Ayuda</a> </div>
          </div>      
        </div>      
      </div>
    </div>
  </div>

@endsection