@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Role</strong>
                    @can('roles.index')
                        <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nombre: </strong>{{ $role->name }}</p>
                            <p><strong>Slug: </strong>{{ $role->slug ?:"Desconocido" }}</p>
                            <p><strong>Descripción: </strong>{{ $role->description ?:"Desconocido" }}</p>
                        </div>
                        <div class="col-md-6">
                            @if ($role->id_user)
                                <p><strong>Autor: </strong><a href="/users/{{$role->id_user}}">{{ $role->id_user}}</a></p>
                            @else
                                <p><strong>Autor:</strong> Desconocido</p>
                            @endif
                            <p><strong>Creado: </strong>{{ $role->created_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $role->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
