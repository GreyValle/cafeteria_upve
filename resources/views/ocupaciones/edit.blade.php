@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Editando ocupación</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('ocupacion.show')
                            <a href="{{ route('ocupacion.show',$ocupacion->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('ocupacion.index')
                            <a href="{{ route('ocupacion.index') }}" class="btn btn-sm btn-outline-secondary">Ocupaciones</a>
                        @endcan
                      </div>
                    </div>
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
