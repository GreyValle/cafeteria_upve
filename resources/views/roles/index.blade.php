@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <STRONG>Roles</STRONG>
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
                  @can('roles.show')
                    <td width="10px"><a class="btn btn-outline-secondary btn-sm" href="{{action('RoleController@show', $role->id)}}" >Ver</a></td>
                  @endcan
                  @can('roles.edit')
                    <td width="10px"><a class="btn btn-outline-primary btn-sm" href="{{action('RoleController@edit', $role->id)}}">Editar</a></td>
                  @endcan
                  @can('roles.destroy')
                    <td width="10px">
                      <form action="{{action('RoleController@destroy', $role->id)}}" method="POST">
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
                  <td colspan="8">No hay registro !!</td>
                </tr>
                @endif
              </tbody>
            </table>
            <hr>
          </div> {{-- table-reponsive end --}}
          <div class="row justify-content-center">
            {{ $roles->render() }}
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
