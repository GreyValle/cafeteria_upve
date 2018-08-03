@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando estatus</strong>
                    @can('orden_estatus.index')
                        <a href="{{ route('orden_estatus.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                
                <div class="card-body">
                    {!! Form::model($estatus, ['route' => ['orden_estatus.update', $estatus->id],
                    'method' => 'PUT' ]) !!}
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="PATCH">
                      @include('orden_estatus.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
