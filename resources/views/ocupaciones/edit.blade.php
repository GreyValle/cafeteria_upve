@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando ocupación</strong>
                    @can('ocupacion.index')
                        <a href="{{ route('ocupacion.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                
                <div class="card-body">
                    {!! Form::model($ocupacion, ['route' => ['ocupacion.update', $ocupacion->id],
                    'method' => 'PUT' ]) !!}
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="PATCH">
                      @include('ocupaciones.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
