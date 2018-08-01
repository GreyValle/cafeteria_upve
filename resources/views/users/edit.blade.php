@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Editando Usuario</strong>
                    @can('users.index')
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
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
