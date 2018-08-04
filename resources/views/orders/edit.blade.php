@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card">
                <div class="card-header"><strong>Editando Orden</strong>
                    @can('orders.index')
                        <a href="{{ route('orders.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                </div>
                <div class="card-body">
                  {!! Form::model($orden, ['route' => ['orders.update', $orden->id],
                  'method' => 'PUT' ]) !!}
                    @include('orders.partials.form_edit')
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
