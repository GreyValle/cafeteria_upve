@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header"><strong>Creando estatus social</strong>
                    @can('estatus_social.index')
                        <a href="{{ route('estatus_social.index') }}" class="btn btn-sm btn-outline-secondary float-right">Volver</a>
                    @endcan
                </div>

                <div class="card-body">
                    {!! Form::open(['route'=>'estatus_social.store']) !!}
                        {{ csrf_field() }}
                        @include('estatus_social.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection