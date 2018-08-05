<div class="form-group">
	{{ Form::label('name','Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Nombre del role','required']) }}
</div>
{{-- <div class="form-group">
	{{ Form::label('slug','URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div> --}}
<div class="form-group">
	{!! Form::label('description','Descripción') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Descripción sobre los permisos del rol', 'required','rows'=>'2']) !!}
</div>

<hr>
<h3>Permiso especial</h3>
<div class="form-group">
	<label>{{ Form::radio('special', 'all-access')}} Acceso total </label>
	<label>{{ Form::radio('special', 'no-access')}} Ningún acceso </label>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach ($permissions as $permission)
			<li>
				<label>
					{{ Form::checkbox('permissions[]', $permission->id, null) }}					
					{{ $permission->name ?: 'Desconocido' }}
					<em>({{ $permission->description ?: 'Sin descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>
<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
</div>