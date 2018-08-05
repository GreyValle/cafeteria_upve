@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando Escolaridad</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('escolaridad.show')
                            <a href="{{ route('escolaridad.show',$escolaridad->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('escolaridad.index')
                            <a href="{{ route('escolaridad.index') }}" class="btn btn-sm btn-outline-secondary">Escolaridades</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::model($escolaridad, ['route' => ['escolaridad.update', $escolaridad->id],
                    'method' => 'PUT' ]) !!}
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="PATCH">
                      @include('escolaridad.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
