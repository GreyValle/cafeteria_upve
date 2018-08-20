@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card box-shadow">
        <div class="card-header" style="font-size: large;">
          <STRONG>Comentarios</STRONG>
          @can('comentarios.index_2')
            <a href="{{ route('comentarios.index_2') }}" class="btn btn-sm btn-outline-secondary float-right">Refrescar</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Comentario</th>
                  <th>Autor</th>
                  <th>Fecha</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($comentarios->count())  
                  @foreach($comentarios as $comentario)  
                    <tr>
                      <td>{{$comentario->id}}</td>
                      <td>{{ $comentario->comentario }}</td>
                      <td>{{ $comentario->descripcion }}</td>
                      <td>
                        <a href="/users/{{ $comentario->user->id}}">{{$comentario->user->name}}</a>
                      </td>
                      <td>{{ $comentario->updated_at }}</td>
                        <td width="10px">
                          <form action="{{action('ComentarioController@destroy_2', $comentario->id)}}" method="POST">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-sm btn-outline-secondary" type="submit">Eliminar</button>
                          </form>
                        </td>
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
            {{ $comentarios->render() }}
          </div>      
        </div> 
      </div>
    </div>
  </div>

@endsection