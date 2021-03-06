@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Creando ocupación</strong>
                    @can('ocupacion.index')
                        <a href="{{ route('ocupacion.index') }}" class="btn btn-sm btn-outline-secondary float-right">Volver</a>
                    @endcan
                </div>

                <div class="card-body">
                	{!! Form::open(['route'=>'ocupacion.store']) !!}
						{{ csrf_field() }}
						@include('ocupaciones.partials.form')
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection