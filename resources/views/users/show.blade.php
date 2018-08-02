@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Usuario</strong>
                    @can('users.index')
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                	<div class="row">
                    <div class="col-md-6">
                        
                    <p><strong>Nombre: </strong>{{ $user->name }}</p>
                    <p><strong>Email: </strong>{{ $user->email }}</p>
                    <p><strong>Saldo: </strong>{{ $user->saldo }}</p>
                    <p><strong>Teléfono: </strong>{{ $user->telefono }}</p>
                    <p><strong>Escolaridad: </strong><a href="/escolaridad/{{ $user->escolaridad_id }}">{{ $user->escolaridad->escolaridad }}   </a></p>
                    <p><strong>Estatus social: </strong><a href="/estatus_social/{{ $user->estatus_social_id }}">{{ $user->estatus_social->estatus }}   </a></p>
                    </div>  
                    
                    <div class="col-md-6">
                    <p><strong>Ocupación: </strong><a href="/ocupacion/{{ $user->ocupacion_id }}">{{ $user->ocupacion->ocupacion }}  </a></p>
                    <p><strong>Tipo sangre: </strong><a href="/tipo_sangre/{{ $user->tipo_sangre_id }}">{{ $user->tipo_sangre->tipo_sangre }} </a></p>
                    <p><strong>Estatus: </strong>{{ $user->estatus }} </p>
                    <p><strong>Registro: </strong>{{ $user->created_at }}</p>
                    <p><strong>Actualización: </strong>{{ $user->updated_at }}</p>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
