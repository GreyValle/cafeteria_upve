@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
	        <div class="card-header">
	          <h2>Solicitud de orden <a href="{{ route('productos.show', $dato->id) }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver al producto!" data-placement="right">Atrás</a>
	          </h2>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	<form method="POST" action="{{ route('orders.store') }}"  role="form">
					{{ csrf_field() }}
			
					<div class="form-group">
						<label for="id_cliente">Cliente:</label>
						<input type="hidden" name="id_cliente" id="id_cliente" class="form-control input-sm" required="" value="{{ Auth::user()->id }}">
						<input type="text" name="cliente" id="cliente" class="form-control input-sm" required="" value="{{ Auth::user()->name }}">
					</div>
							
					<div class="form-group">
						<label for="nombre">Platillo:</label>
						<input type="hidden" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="" value="{{ $dato->id }}">	
						<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="" value="{{ $dato->nombre }}">
					</div>

					<div class="form-group">
						<label for="total">Total:</label>
						<input type="number" name="total" id="total" class="form-control input-sm" placeholder="Ingresa total" required="" step="0.01" min="0" value="{{ $dato->precio }}">
					</div>
						<div class="form-group">
						<label for="total">Fecha:</label>
						<input type="date" name="fecha_entregar" id="fecha_entregar" class="form-control input-sm" placeholder="Ingresa fecha" required="">
					</div>
					
					
					<input type="submit"  value="Ordenar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para ordenar!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection