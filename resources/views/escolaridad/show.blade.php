@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card box-shadow">
				<div class="card-header" style="font-size: large;"><strong>Escolaridad</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('escolaridad.edit')
                            <a href="{{ route('escolaridad.edit',$escolaridad->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('escolaridad.index')
                            <a href="{{ route('escolaridad.index') }}" class="btn btn-sm btn-outline-secondary">Escolaridades</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        	<p><strong>Nombre: </strong>{{ $escolaridad->escolaridad }}</p>
                        	<p><strong>Descripción: </strong>{{ $escolaridad->descripcion }}</p>
                        	@php
                                if ($escolaridad->user_id!=null):
                            @endphp
                                @can('users.show')
                                    <p><strong>Autor: </strong><a href="/users/{{ $escolaridad->user->id}}">{{ $escolaridad->user->name }}</a></p>
                                @endcan
                            @php
                                endif;
                            @endphp
                        </div>

                        <div class="col-md-6">
                            <p><strong>Creada: </strong>{{ $escolaridad->created_at }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $escolaridad->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection