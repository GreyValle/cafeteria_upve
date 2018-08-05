@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="font-size: large;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Ocupación</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('ocupacion.edit')
                            <a href="{{ route('ocupacion.edit',$ocupacion->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('ocupacion.index')
                            <a href="{{ route('ocupacion.index') }}" class="btn btn-sm btn-outline-secondary">Ocupaciones</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Ocupación: </strong>{{ $ocupacion->ocupacion }}</p>
                            <p><strong>Descripción: </strong>{{ $ocupacion->descripcion ?:"Desconocido" }}</p>
                            @if ($ocupacion->user_id)
                                {{-- expr --}}
                                <p><strong>Autor: </strong><a href="/users/{{$ocupacion->user->id}}">{{ $ocupacion->user->name }}</a></p>
                            @else
                                <p><strong>Autor: </strong>Desconocido</p>

                            @endif
                        </div>
                        <div class="col-md-6">
                            <p><strong>Creado: </strong>{{ $ocupacion->created_at ?:"Desconocido" }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                    <p>Última actualización: {{ $ocupacion->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
