@extends('layouts.app')

@section('content')
<div class="container">
{{--     @php
        echo $user;
    @endphp --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Usuario</strong>
                    @can('users.index')
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                	<p><strong>Nombre: </strong>{{ $user->name }}</p>
                    <p><strong>Email: </strong>{{ $user->email }}</p>
                    @php
                        if ($user->telefono != 'Desconocido'):
                    @endphp
                       <p><strong>Teléfono: </strong>{{ $user->telefono }}</p>
                    @php
                        endif;
                    @endphp
                    @php
                        if ($user->escolaridad){

                            if ($escolaridad!=null):
                    @endphp
                        @can('escolaridad.show')
                            <p><strong>Escolaridad: </strong><a href="">{{ $escolaridad->escolaridad }}</a></p>
                        @endcan
                    @php
                            endif;
                        }
                    @endphp
                    <p><strong>Registro: </strong>{{ $user->created_at }}</p>
                	{{-- <p><strong>Actualización: </strong>{{ $user->updated_at }}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
