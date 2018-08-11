@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card box-shadow">
        <div class="card-header">
          <STRONG>Escolaridad</STRONG>
          @can('escolaridad.create')
            <a href="{{ route('escolaridad.create') }}" class="btn btn-sm btn-outline-secondary float-right">Crear</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Escolaridad</th>
                  <th>Descripción</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($escolaridades->count())  
                @foreach($escolaridades as $escolaridad)  
                <tr>
                  <td>{{$escolaridad->id}}</td>
                  <td>{{$escolaridad->escolaridad}}</td>
                  <td>{{$escolaridad->descripcion}}</td>                      
                  @can('escolaridad.show')
                    <td width="10px">
                      <a class="btn btn-sm btn-outline-secondary" href="{{action('EscolaridadController@show', $escolaridad->id)}}" >Ver</a>
                    </td>
                  @endcan
                  @can('escolaridad.edit')
                    <td width="10px"><a class="btn btn-sm btn-outline-secondary" href="{{action('EscolaridadController@edit', $escolaridad->id)}}">Editar</a></td>
                  @endcan
                  @can('escolaridad.destroy')
                    <td width="10px">
                    <form action="{{action('EscolaridadController@destroy', $escolaridad->id)}}" method="POST">
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
                  <td colspan="8">¡No hay registro!</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div> 
          <hr>            
          <div class="row justify-content-center">
            {{ $escolaridades->links() }}
          </div>      
        </div>      
      </div> {{-- card end --}}
    </div> {{-- col-md-8 end --}}
  </div> {{-- row justify-content-center --}}
</div>
@endsection
