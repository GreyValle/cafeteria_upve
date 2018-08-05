@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card">
                <div class="card-header"><strong>Editando Usuario</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('users.show')
                            <a href="{{ route('users.show',$user->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('users.index')
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-secondary ">Usuarios</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body">
                {!! Form::model($user, ['route' => ['users.update', $user->id],
                'method' => 'PUT' ]) !!}
                  @include('users.partials.form')
                {!! Form::close() !!}
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
