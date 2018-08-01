@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Role</strong>
                    @can('roles.index')
                        <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                	<p><strong>Nombre: </strong>{{ $role->name }}</p>
                	{{-- <p><strong>Slug: </strong>{{ $role->slug ?:"Desconocido" }}</p> --}}
                    <p><strong>Descripción: </strong>{{ $role->description ?:"Desconocido" }}</p>
                    @php
                        if ($role->id_user!=null):
                    @endphp
                        @can('users.show')
                            <p><strong>Autor: </strong><a href="/users/{{$user->id}}">{{ $user->id }}</a></p>
                        @endcan
                    @php
                        endif;
                    @endphp
                    <p><strong>Creado: </strong>{{ $role->created_at ?:"Desconocido" }}</p>
                	<p><strong>Actualizado: </strong>{{ $role->updated_at ?:"Desconocido" }}</p>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
