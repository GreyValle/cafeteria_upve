@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Tipo de sangre</strong>
                    @can('tipo_sangre.index')
                        <a href="{{ route('tipo_sangre.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Tipo: </strong>{{ $sangre->tipo_sangre }}</p>
                          
                            <p><strong>Autor: </strong><a href="/users/{{$sangre->user->id}}">{{ $sangre->user->name }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Creado: </strong>{{ $sangre->created_at ?:"Desconocido" }}</p>
                        	<p><strong>Actualizado: </strong>{{ $sangre->updated_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
