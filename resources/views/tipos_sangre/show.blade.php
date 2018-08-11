@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header"><strong>Tipo de sangre</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('tipo_sangre.edit')
                            <a href="{{ route('tipo_sangre.edit',$sangre->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('tipo_sangre.index')
                            <a href="{{ route('tipo_sangre.index') }}" class="btn btn-sm btn-outline-secondary ">Sangres</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Tipo: </strong>{{ $sangre->tipo_sangre }}</p>
                          
                            <p><strong>Autor: </strong><a href="/users/{{$sangre->user->id}}">{{ $sangre->user->name }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Creado: </strong>{{ $sangre->created_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $sangre->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
