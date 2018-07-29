@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
	        <div class="card-header">
	          <h2>Nuevo producto <a href="{{ route('productos.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de escolaridad!" data-placement="right">Atrás</a>
	          </h2>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	{{-- <form method="POST" action="{{ route('productos.store') }}"  role="form"> --}}
	        	<form method="POST" action="{{ route('productos.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="image">Imagen:</label>
						<div class="img-thumbnail ">
							<img src="" id="profile-img-tag" width="100px" class="img-fluid ">
							<input type="file" name="image" id="image">
						</div>
					</div>
			
							
					<div class="form-group">
						<label for="nombre">Platillo:</label>
						<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="">	
					</div>
	
					<div class="form-group">
						<label for="descripcion">Descripción:</label>
						<textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad" required=""></textarea>
					</div>

					<div class="form-group">
						<label for="ingredientes">Ingredientes:</label>
						<textarea name="ingredientes" id="ingredientes" class="form-control input-sm" placeholder="Ingresa los ingredientes" required=""></textarea>
					</div>

					<div class="form-group">
						<label for="precio">Precio:</label>
						<input type="number" name="precio" id="precio" class="form-control input-sm" placeholder="Ingresa precio" required="" step="0.01" min="0">
					</div>
					
					<div class="form-group">
						<label for="precio">Estatus:</label>
						<select name="estatus" id="estatus" class="form-control input-sm" required="">
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>	
						</select>
					</div>
					
					
					<input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para guardar el producto!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection