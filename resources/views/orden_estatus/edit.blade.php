@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header"><strong>Editando estatus</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('orden_estatus.show')
                            <a href="{{ route('orden_estatus.show',$estatu->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('orden_estatus.index')
                            <a href="{{ route('orden_estatus.index') }}" class="btn btn-sm btn-outline-secondary">Estatus</a>
                        @endcan
                      </div>
                    </div>
                </div>
                
                <div class="card-body">
                    {!! Form::model($estatu, ['route' => ['orden_estatus.update', $estatu->id],
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
