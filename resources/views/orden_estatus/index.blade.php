@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card box-shadow">
        <div class="card-header" style="font-size: large;">
          <STRONG>Estatus de Ordenes</STRONG>
          @can('orden_estatus.create')
            <a href="{{ route('orden_estatus.create') }}" class="btn btn-sm btn-outline-secondary float-right">Crear</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Estatus</th>
                  <th>Descripción</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($estatus->count())  
                  @foreach($estatus as $estatu)  
                    <tr>
                      <td>{{$estatu->id}}</td>
                      <td>{{$estatu->estatus}}</td>
                      <td>{{$estatu->descripcion}}</td>                      
                      @can('estatus_social.show')
                        <td width="10px"><a class="btn btn-sm btn-outline-secondary" href="{{action('OrdenEstatusController@show', $estatu->id)}}" >Ver</a></td>
                      @endcan
                      @can('estatus_social.edit')
                        <td width="10px"><a class="btn btn-sm btn-outline-secondary" href="{{action('OrdenEstatusController@edit', $estatu->id)}}">Editar</a></td>
                      @endcan
                      @can('estatus_social.destroy')
                        <td width="10px">
                          <form action="{{action('OrdenEstatusController@destroy', $estatu->id)}}" method="POST">
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
        </div>      
      </div>{{-- card end --}}
    </div>
  </div>
</div>

@endsection