@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Roles
                  @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                  @endcan
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="mytable" class="table table-hover table-sm">
                      <thead class="thead-light">
                        <tr>
                          <th>ID</th>
                          <th>Rol</th>
                          <th>Descripción</th>
                          {{-- <th>Password</th> --}}
                          <th colspan="3">&nbsp;</th>   
                        </tr>
                      </thead>
                      <tbody>
                        @if($roles->count())  
                          @foreach($roles as $role)  
                            <tr>
                              <td>{{$role->id}}</td>
                              <td>{{$role->name }}</td>
                              <td>{{$role->description ?:'Sin descripción'}}</td>                     
                              {{-- <td>{{$role->password}}</td>                      --}}
                              <td width="10px">
                                @can('roles.show')
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-default">
                                      Ver
                                    </a>
                                @endcan
                              </td>
                              <td width="10px">
                                @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">
                                      Editar
                                    </a>
                                @endcan
                              </td>
                              <td width="10px">
                                @can('roles.destroy')
                                {!! Form::open([
                                  'route' => ['roles.destroy', $role->id], 
                                  'method' => 'DELETE']) !!}
                                  <button type="" class="btn btn-sm btn-danger">
                                    Eliminar
                                  </button>
                                {!! Form::close() !!}
                                @endcan
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
                    {{ $roles->render() }}
                  </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
