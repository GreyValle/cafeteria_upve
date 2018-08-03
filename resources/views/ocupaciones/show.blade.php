@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Ocupación</strong>
                    @can('ocupacion.index')
                        <a href="{{ route('ocupacion.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Ocupación: </strong>{{ $ocupacion->ocupacion }}</p>
                            <p><strong>Descripción: </strong>{{ $ocupacion->descripcion ?:"Desconocido" }}</p>
                            <p><strong>Autor: </strong><a href="/users/{{$ocupacion->user->id}}">{{ $ocupacion->user->name }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Creado: </strong>{{ $ocupacion->created_at ?:"Desconocido" }}</p>
                        	<p><strong>Actualizado: </strong>{{ $ocupacion->updated_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
