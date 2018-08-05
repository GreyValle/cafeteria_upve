<div class="form-group">
	{{ Form::label('escolaridad','Escolaridad:') }}
	{{ Form::text('escolaridad', null, ['class' => 'form-control','placeholder'=>'Ingresa la escolaridad', 'required']) }}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción:') !!}
	{!! Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Descripción breve de la escolaridad','rows'=>'2', 'required']) !!}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-secondary float-right', 'title'=>'¡Este boton en para actualizar la escolaridad!'])  }}
</div>