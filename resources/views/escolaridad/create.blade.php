@extends('layouts.app')
@section('content')
<form  method="POST" :submit.prevent="createEscolary">
	<div class="modal fade" id="create">
		<div class="modal-dialog">
			<div class="modal-content">	
				<div class="modal-header">	
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h4>Nueva escolaridad</h4>
				</div>
				<div class="modal-body">	
					<label>Escolaridad: 
						<input type="text" name="escolaridad" class="form-control" v-model="newEscolary">
					</label>
					<label>Descripción: 
						<input type="text" name="descripcion" class="form-control" v-model="newEscolary">
					</label>
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>
				</div>
				<div class="modal-footer">	
					<input type="submit" class="btn btn-primary" value="Guardar">
				</div>
			</div>	
		</div>		
	</div>	
</form>
<div class="container">
  <div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
	        <div class="card-header">
	          <h2>Nueva escolaridad <a href="{{ route('escolaridad.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de escolaridad!" data-placement="right">Atrás</a>
	          </h2>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	<form method="POST" action="{{ route('escolaridad.store') }}"  role="form">
					{{ csrf_field() }}
							
					<div class="form-group">
						<label for="escolaridad">Escolaridad:</label>
						<input type="text" name="escolaridad" id="escolaridad" class="form-control input-sm" placeholder="Ingresa escolaridad" required="">
				
					</div>
	
					<div class="form-group">
						<label for="descripcion">Descripción:</label>
						<textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad" required=""></textarea>
					</div>
					
					
					<input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para guardar la escolaridad!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection