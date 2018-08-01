@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <STRONG>Usuarios</STRONG>
                  <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary float-right">Refrescar</a>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="mytable" class="table table-hover table-sm">
                      <thead class="thead-light">
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          {{-- <th>Password</th> --}}
                          <th colspan="3">&nbsp;</th>   
                        </tr>
                      </thead>
                      <tbody>
                        @if($users->count())  
                          @foreach($users as $user)  
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>                     
                              {{-- <td>{{$user->password}}</td>                      --}}
                              <td width="10px">
                                @can('users.show')
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">
                                      Ver
                                    </a>
                                @endcan
                              </td>
                              <td width="10px">
                                @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                      Editar
                                    </a>
                                @endcan
                              </td>
                              <td width="10px">
                                @can('users.destroy')
                                {!! Form::open([
                                  'route' => ['users.destroy', $user->id], 
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
                    {{ $users->render() }}
                  </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
