@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-10">
      <div class="card box-shadow">
        <div class="card-header" style="font-size: large;"><strong>Creando Platillo</strong>
	        @can('products.index')
	        	<a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm float-right">Volver</a>
	        @endcan
        </div>

	    <div class="card-body">					
	    	<form method="POST" action="{{ route('products.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="image">Imagen:</label>
					<input type="file" name="image" id="image" class="form-control input-sm"required="" style="padding:3px">
				</div>
				<div class="form-group">
					<label for="nombre">Platillo:</label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="" maxlength="40">	
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción:</label>
					<textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad"  maxlength="70"></textarea>
				</div>
				<div class="form-group">
					<label for="ingredientes">Ingredientes:</label>
					<textarea name="ingredientes" id="ingredientes" class="form-control input-sm" placeholder="Ingresa los ingredientes" required=""  maxlength="70"></textarea>
				</div>
				<div class="form-group">
					<label for="precio">Precio:</label>
					<input type="number" name="precio" id="precio" class="form-control input-sm" placeholder="Ingresa precio" required="" step="0.01" min="0" max="1000">
				</div>
				<div class="form-group">
					<label for="precio">Estatus:</label>
					<select name="estatus" id="estatus" class="form-control input-sm" required="">
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>	
					</select>
				</div>
				<hr>
				<input type="submit"  value="Guardar" class="btn btn-sm btn-outline-secondary float-right">
			</form>
	    </div>{{-- card BODY --}}
	  </div>{{-- card end --}}
    </div>{{-- col-md-8 col-lg-10 --}}
  </div>{{-- ROW --}}
</div>{{-- CONTAINER --}}
@endsection