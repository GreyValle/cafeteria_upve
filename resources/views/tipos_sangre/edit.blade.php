@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header"><strong>Editando tipo sangre</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('tipo_sangre.show')
                            <a href="{{ route('tipo_sangre.show',$sangre->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('tipo_sangre.index')
                            <a href="{{ route('tipo_sangre.index') }}" class="btn btn-sm btn-outline-secondary">Sangres</a>
                        @endcan
                      </div>
                    </div>
                   
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
