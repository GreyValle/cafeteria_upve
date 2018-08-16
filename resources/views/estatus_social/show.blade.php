@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Estatus social</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('estatus_social.edit')
                            <a href="{{ route('estatus_social.edit',$estatus->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('estatus_social.index')
                            <a href="{{ route('estatus_social.index') }}" class="btn btn-sm btn-outline-secondary">Estatus</a>
                        @endcan
                      </div>
                    </div>
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
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $estatus->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
