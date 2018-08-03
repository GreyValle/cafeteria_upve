@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <STRONG>Ocupaciones</STRONG>
          @can('ocupacion.create')
            <a href="{{ route('ocupacion.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Ocupación</th>
                  <th>Descripción</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($ocupaciones->count())  
                  @foreach($ocupaciones as $ocupacion)  
                    <tr>
                      <td>{{$ocupacion->id}}</td>
                      <td>{{$ocupacion->ocupacion}}</td>
                      <td>{{$ocupacion->descripcion}}</td>                      
                      @can('estatus_social.show')
                        <td width="10px"><a class="btn btn-outline-secondary btn-sm" href="{{action('OcupacionesController@show', $ocupacion->id)}}" >Ver</a></td>
                      @endcan
                      @can('estatus_social.edit')
                        <td width="10px"><a class="btn btn-outline-primary btn-sm" href="{{action('OcupacionesController@edit', $ocupacion->id)}}">Editar</a></td>
                      @endcan
                      @can('estatus_social.destroy')
                        <td width="10px">
                          <form action="{{action('OcupacionesController@destroy', $ocupacion->id)}}" method="POST">
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
          </div>
           <br>            
          <div class="align-items-center">{{ $ocupaciones->links() }}
          </div>      
        </div>      
      </div>
    </div>
  </div>

@endsection