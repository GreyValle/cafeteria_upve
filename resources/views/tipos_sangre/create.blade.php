@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
	        <div class="card-header">
	          <h2> Nuevo tipo sangre <a href="{{ route('tipos-sangre.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista tipos sangre!" data-placement="right">Atrás</a>
	          </h2>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	<form method="POST" action="{{ route('tipos-sangre.store') }}"  role="form">
					{{ csrf_field() }}
							
					<div class="form-group">
						<label for="tipo_sangre">Tipo:</label>
						<input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control input-sm" placeholder="Ingresa tipo de sangre" required="">
					</div>
					
					
					<input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para guardar el tipo de sangre!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection