@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Orden: {{ $orden->id }}</strong>
                    <div class="btn-toolbar float-right">
                      <div class="btn-group">
                        @can('orders.edit')
                            <a href="{{ route('orders.edit',$orden->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        @endcan
                        @can('orders.index')
                            <a href="{{ route('orders.index') }}" class="btn btn-sm btn-outline-secondary">Ordenes</a>
                        @endcan
                      </div>
                    </div>
                </div>
                <div class="card-body" style="font-size: large;">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Cliente: </strong><a href="/users/{{ $orden->user->id}}">{{ $orden->user->name }}</a></p>
                           
                            <p><strong>Menú: </strong><a href="/products/{{ $orden->product->id}}">{{ $orden->product->nombre }}</a></p>

                            <p><strong>Total: </strong>$ {{ $orden->total }}</p>

                            <p><strong>Entegar: </strong>{{ $orden->fecha_entregar}} <strong> a las </strong>{{ $orden->hora_entregar }} hrs</p>

                            
                        </div>
                        <div class="col-md-6">
                            <p><strong>Estatus: </strong><a href="/orden_estatus/{{ $orden->orden_estatus->id}}">{{ $orden->orden_estatus->estatus }}</a></p>
			                 @include('orders.partials.form_estatus_update')
                 
                            {{-- <p><strong>Creado: </strong>{{ $orden->created_at ?:"Desconocido" }}</p> --}}
                        	{{-- <p><strong>Actualizado: </strong>{{ $orden->updated_at ?:"Desconocido" }}</p> --}}
                        </div>
                    </div><hr>
                    <div class="row">

                        <div class="card-body">
                            <img width="100%" class="img-fluid" src="/productos/imagenes/{{ $orden->product->imagen}}" >
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center" style="font-size: small">
                	 <p>Última actualización: {{ $orden->updated_at ?:"Desconocido" }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
