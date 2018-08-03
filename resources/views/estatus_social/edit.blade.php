@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando estatus social</strong>
                    @can('estatus_social.index')
                        <a href="{{ route('estatus_social.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                
                <div class="card-body">
                    {!! Form::model($estatus_social, ['route' => ['estatus_social.update', $estatus_social->id],
                    'method' => 'PUT' ]) !!}
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="PATCH">
                      @include('estatus_social.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
