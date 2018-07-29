@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
	        <div class="card-header">
	          <h2>Nuevo estatus social <a href="{{ route('estatus-social.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de estatus sociales!" data-placement="right">Atrás</a>
	          </h2>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	<form method="POST" action="{{ route('estatus-social.store') }}"  role="form">
					{{ csrf_field() }}
							
					<div class="form-group">
						<label for="estatus">Estatus social:</label>
						<input type="text" name="estatus" id="estatus" class="form-control input-sm" placeholder="Ingresa ocupación" required=""> 
					</div>
	
					<div class="form-group">
						<label for="descripcion">Descripción:</label>
					
						<textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe el estatus" required=""></textarea>
					</div>
					
					
					<input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para guardar el nuevo estatus social!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection