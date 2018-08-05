@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando estatus social</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('estatus_social.show')
                            <a href="{{ route('estatus_social.show',$estatus_social->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('estatus_social.index')
                            <a href="{{ route('estatus_social.index') }}" class="btn btn-sm btn-outline-secondary">Estatus</a>
                        @endcan
                      </div>
                    </div>
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
