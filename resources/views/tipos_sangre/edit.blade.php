@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando tipo sangre</strong>
                    @can('tipo_sangre.index')
                        <a href="{{ route('tipo_sangre.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                
                <div class="card-body">
                    {!! Form::model($sangre, ['route' => ['tipo_sangre.update', $sangre->id],
                    'method' => 'PUT' ]) !!}
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="PATCH">
                      @include('tipos_sangre.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
