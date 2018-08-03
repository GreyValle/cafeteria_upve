@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Estatus social</strong>
                    @can('estatus_social.index')
                        <a href="{{ route('estatus_social.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Estatus: </strong>{{ $estatus->estatus }}</p>
                            <p><strong>Descripción: </strong>{{ $estatus->descripcion ?:"Desconocido" }}</p>
                            <p><strong>Autor: </strong><a href="/users/{{$estatus->user->id}}">{{ $estatus->user->name }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Creado: </strong>{{ $estatus->created_at ?:"Desconocido" }}</p>
                        	<p><strong>Actualizado: </strong>{{ $estatus->updated_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
