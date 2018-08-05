@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando Rol</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('roles.show')
                            <a href="{{ route('roles.show',$role->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('roles.index')
                            <a href="{{ route('roles.index') }}" class="btn btn-sm btn-outline-secondary">Roles</a>
                        @endcan
                      </div>
                    </div>
                </div>
                
                <div class="card-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT' ]) !!}
                      @include('roles.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
