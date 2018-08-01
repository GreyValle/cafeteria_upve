@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header"><strong>Escolaridad</strong>
                    @can('escolaridad.index')
                        <a href="{{ route('escolaridad.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                	<p><strong>Nombre: </strong>{{ $escolaridad->escolaridad }}</p>
                	<p><strong>Descripción: </strong>{{ $escolaridad->descripcion }}</p>
                	@php
                        if ($escolaridad->user_id!=null):
                    @endphp
                        @can('escolaridad.show')
                            <p><strong>Autor: </strong><a href="/users/{{ $escolaridad->user->id}}">{{ $escolaridad->user->name }}</a></p>
                        @endcan
                    @php
                        endif;
                    @endphp
                	<p><strong>Creada: </strong>{{ $escolaridad->created_at }}</p>
                	<p><strong>Actualizada: </strong>{{ $escolaridad->updated_at }}</p>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection