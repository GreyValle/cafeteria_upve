@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card">
	        <div class="card-header">
	          <h2> Nuevo Cliente <a href="{{ route('clientes.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de clientes!" data-placement="right">Atrás</a>
	        </div>
				{{-- @include('Cliente.frangment.error') --}}
		   		{{-- @include('Cliente.frangment.info') --}}
	        <div class="card-body">					
	        	<form method="POST" action="{{ route('clientes.store') }}"  role="form">
					{{ csrf_field() }}
					<div class="row">		
						<div class="form-group col-md-6">
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del Cliente" required="">
						</div>
		
						<div class="form-group col-md-6">
							<label for="email">Apellidos:</label>
							<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Ingresa correo válido" required="">
						</div>
						
						<div class="form-group col-md-6">
							<label for="direccion">Dirección:</label>
							<textarea name="direccion" id="direccion" class="form-control input-sm" placeholder="Ingresar una dirección correcta" required=""></textarea>
						</div>

						<div class="form-group col-md-6">
							<label for="email">Fecha Nacimiento:</label>
							<input type="date" name="fecha_nac" id="fecha_nac" class="form-control input-sm" placeholder="Ingresa fecha nacimiento" required="">
						</div>
								
						<div class="form-group col-md-6">
							<label for="telefono">Teléfono:</label>
							<input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Número de telefono del cliente" required="">
						</div>
						
						<div class="form-group col-md-6">
							<label for="sexo">Sexo:</label>
							{{-- <input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Ingresar el sexo del cliente"> --}}
						  <select class="custom-select" id="sexo" name="sexo" required="">
						    <option selected>Seleciona el sexo del cliente...</option>
						    <option value="Hombre">Hombre</option>
						    <option value="Mujer">Mujer</option>
						  </select> 
						</div>
					</div>		
					<div class="row">			
						<div class="form-group col-md-6">
							<label for="escolaridad">Escolaridad:</label>
							{{-- <input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Ingresar el sexo del cliente"> --}}
						  <select class="custom-select" id="escolaridad" name="escolaridad" required="">
						    <option selected>Seleciona la ecolaridad del cliente...</option>
						    <option value="Hombre">Bachillerato</option>
						    <option value="Mujer">Licenciatura</option>
						  </select>
						</div>

						<div class="form-group col-md-6">
							<label for="estatus_social">Estatus social:</label>
							{{-- <input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Ingresar el sexo del cliente"> --}}
						  <select class="custom-select" id="estatus_social" name="estatus_social" required="required">
						    <option selected>Seleciona estatus social...</option>
						    <option value="Hombre">Soltero</option>
						    <option value="Mujer">Casado</option>
						  </select>
						</div>

						<div class="form-group col-md-6">
							<label for="cant_hijos">Cantidad hijos:</label>
							<input type="number"  class="form-control" name="cant_hijos">
						  </select>
						</div>

						<div class="form-group col-md-6">
							<label for="ocupacion">Ocupación:</label>
							{{-- <input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Ingresar el sexo del cliente"> --}}
						  <select class="custom-select" id="ocupacion" name="ocupacion" required="">
						    <option selected>Seleciona ocupacion...</option>
						    <option value="Hombre">Profesor</option>
						    <option value="Mujer">Estudiante</option>
						  </select>
						</div>

						<div class="form-group col-md-6">
							<label for="saldo">Saldo:</label>
							<input type="number" class="form-control" step="0.01" min="0" name="saldo" value="0">
						</div>

						<div class="form-group col-md-6">
							<label for="estatus">Estatus:</label>
							<select class="custom-select" id="ocupacion" name="ocupacion" required="">
							    <option selected>Seleciona estatus...</option>
							    <option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
						</div>
					</div>	

					<input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para guardar el nuevo cliente!" data-placement="left">
										
				</form>
			</div>
		</div>{{-- card end --}}
	</div>
  </div>
</div>
@endsection