<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{{ Form::label('name','Nombre:') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('email','Email:') }}
			{{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
		</div>
		<div class="form-group">
				{{ Form::label('saldo','Saldo:') }}
				{{ Form::number('saldo', null, ['class' => 'form-control', 'step'=>'0.01', 'min'=>'0', 'required', 'disabled']) }}
		</div>
		<div class="form-group">
			{{ Form::label('telefono','Teléfono:') }}
			{{ Form::text('telefono', null, ['class' => 'form-control', 'required']) }}
		</div>
		<div class="form-group">
			{!! Form::label('escolaridad_id','Escolaridad:') !!}
			{!! Form::select('escolaridad_id',$escolaridades,$user->escolaridad_id,['class'=>'form-control','placeholder'=>'Seleciona una escolaridad', 'required']) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('estatus_social_id','Estatus social:') !!}
			{!! Form::select('estatus_social_id',$estatus,$user->estatus_social_id,['class'=>'form-control','placeholder'=>'Seleciona un estatus', 'required']) !!}
		</div>	
		<div class="form-group">
			{!! Form::label('ocupacion_id','Ocupación:') !!}
			{!! Form::select('ocupacion_id',$ocupaciones,$user->ocupacion_id,['class'=>'form-control','placeholder'=>'Seleciona una ocupación', 'required']) !!}
		</div>	
		<div class="form-group">
			{!! Form::label('tipo_sangre_id','Tipo sangre:') !!}
			{!! Form::select('tipo_sangre_id',$sangres,$user->tipo_sangre_id,['class'=>'form-control','placeholder'=>'Seleciona un tipo', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estatus','Estatus:') !!}
			<select class="custom-select" name="estatus" >
				<option selected>{{$user->estatus}}</option>
				<option value="Desactivado">Desactivado</option>
				<option value="Activado">Activado</option>
			</select>
		</div>	
	</div>			
</div>
<hr>
@can('users.asignar_roles')
	<h3>Lista de roles</h3>
	<div class="form-group">
		<ul class="list-unstyled">
			@foreach ($roles as $role)
				<li>
					<label>
						{{ Form::checkbox('roles[]', $role->id, null) }}					
						{{ $role->name }}
						<em>({{ $role->description ?: 'Sin descripción' }})</em>
					</label>
				</li>
			@endforeach
		</ul>
	</div>
@endcan
<div>
	{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
</div>