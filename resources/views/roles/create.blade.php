@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Creando Role</strong>
                    @can('roles.index')
                        <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>

                <div class="card-body">
                	{!! Form::open(['route'=>'roles.store']) !!}
						@include('roles.partials.form')
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
