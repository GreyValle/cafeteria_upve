@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Creando estatus orden</strong>
                    @can('orden_estatus.index')
                        <a href="{{ route('orden_estatus.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>

                <div class="card-body">
                	{!! Form::open(['route'=>'orden_estatus.store']) !!}
						{{ csrf_field() }}
						@include('orden_estatus.partials.form')
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection