@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Usuario</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('users.edit')
                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('users.index')
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-secondary ">Usuarios</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                	<div class="row">
                    <div class="col-md-6">
                        <p><strong>Nombre: </strong>{{ $user->name }}</p>
                        <p><strong>Email: </strong>{{ $user->email }}</p>
                        <p><strong>Saldo: </strong> $ {{ $user->saldo }}</p>
                        <p><strong>Teléfono: </strong>{{ $user->telefono }}</p>
                        @if ($user->escolaridad_id and $user->escolaridad->escolaridad!="Desconocido")
                            <p><strong>Escolaridad: </strong><a href="/escolaridad/{{ $user->escolaridad_id }}">{{ $user->escolaridad->escolaridad }}   </a></p>
                        @else
                            <p><strong>Escolaridad: </strong>Desconocido</p>
                        @endif

                    </div>  
                    
                    <div class="col-md-6">
                        @if ($user->estatus_social_id and $user->estatus_social->estatus!="Desconocido" )
                            <p><strong>Estatus social: </strong><a href="/estatus_social/{{ $user->estatus_social_id }}">{{ $user->estatus_social->estatus }}   </a></p>
                        @else
                            <p><strong>Estatus social: </strong>Desconocido</p>
                        @endif
                        @if ($user->ocupacion_id and $user->ocupacion->ocupacion!="Desconocido" )
                            <p><strong>Ocupación: </strong><a href="/ocupacion/{{ $user->ocupacion_id }}">{{ $user->ocupacion->ocupacion }}  </a></p>
                        @else
                            <p><strong>Ocupación: </strong>Desconocido</a></p>
                        @endif

                        @if ($user->tipo_sangre_id and $user->tipo_sangre->tipo_sangre!="Desconocido")
                            <p><strong>Tipo sangre: </strong><a href="/tipo_sangre/{{ $user->tipo_sangre_id }}">{{ $user->tipo_sangre->tipo_sangre }} </a></p>
                        @else
                            <p><strong>Tipo sangre: </strong>Desconocido</p>
                        @endif
                        {{-- <p><strong>Estatus: </strong>{{ $user->estatus }} </p> --}}
                       
                        @can('users.update_saldo')
                            @include('users.partials.form_saldo_update')
                        @else
                            <p><strong>Registro: </strong>{{ $user->created_at }}</p>
                        @endcan
                    </div>
                    
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $user->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
