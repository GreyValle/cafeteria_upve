@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Creando tipo sangre</strong>
                    @can('tipo_sangre.index')
                        <a href="{{ route('tipo_sangre.index') }}" class="btn btn-sm btn-outline-secondary float-right">Volver</a>
                    @endcan
                </div>

                <div class="card-body">
                	{!! Form::open(['route'=>'tipo_sangre.store']) !!}
						{{ csrf_field() }}
						@include('tipos_sangre.partials.form')
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection