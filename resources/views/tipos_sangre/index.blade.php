@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-10">
      <div class="card">
        <div class="card-header">
          <STRONG>Tipos de sangre</STRONG>
          @can('tipo_sangre.create')
            <a href="{{ route('tipo_sangre.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
          @endcan
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Tipo</th>
                  <th colspan="3">&nbsp;</th>   
                </tr>
              </thead>
              <tbody>
                @if($sangres->count())  
                  @foreach($sangres as $sangre)  
                    <tr>
                      <td>{{$sangre->id}}</td>
                      <td>{{$sangre->tipo_sangre}}</td>
                      @can('tipo_sangre.show')
                        <td width="10px"><a class="btn btn-outline-secondary btn-sm" href="{{action('TiposSangreController@show', $sangre->id)}}" >Ver</a></td>
                      @endcan
                      @can('tipo_sangre.edit')
                        <td width="10px"><a class="btn btn-outline-primary btn-sm" href="{{action('TiposSangreController@edit', $sangre->id)}}">Editar</a></td>
                      @endcan
                      @can('tipo_sangre.destroy')
                        <td width="10px">
                          <form action="{{action('TiposSangreController@destroy', $sangre->id)}}" method="POST">
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
            {{ $sangres->links() }}
          </div>      
        </div>{{-- card-body end     --}}
      </div>{{-- card end     --}}
    </div>{{-- col-md-8 col-lg-10 end--}}
  </div>{{-- row justify-content-center end--}}
</div>{{-- container end--}}
@endsection