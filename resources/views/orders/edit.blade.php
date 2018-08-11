@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card box-shadow">
                <div class="card-header"><strong>Editando Orden</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('orders.show')
                            <a href="{{ route('orders.show',$orden->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        @endcan
                        @can('orders.index')
                            <a href="{{ route('orders.index') }}" class="btn btn-sm btn-outline-secondary">Ordenes</a>
                        @endcan
                      </div>
                    </div>
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
