@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
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
                              @can('users.show')
                                <td width="10px">
                                  <a class="btn btn-outline-secondary btn-sm" href="{{ route('users.show', $user->id) }}">Ver</a>
                                </td>
                              @endcan
                              @can('users.edit')
                                <td width="10px">
                                  <a class="btn btn-outline-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Editar</a>
                                </td>
                              @endcan
                              @can('users.destroy')
                                <td width="10px">
                                {!! Form::open([
                                  'route' => ['users.destroy', $user->id], 
                                  'method' => 'DELETE']) !!}
                                  {{csrf_field()}}
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button type="" class="btn btn-outline-danger btn-sm">
                                    Eliminar
                                  </button>
                                {!! Form::close() !!}
                                </td>
                              @endcan
                            </tr>
                           @endforeach 
                        @else
                          <tr>
                            <td colspan="8">!! No hay registro !!</td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                    <hr>
                  </div> 
                    
                    <div class="row justify-content-center">
                      {{ $users->render() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
