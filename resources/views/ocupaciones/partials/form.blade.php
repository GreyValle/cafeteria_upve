<div class="form-group">
	{{ Form::label('ocupacion','Ocupación:') }}
	{{ Form::text('ocupacion', null, ['class' => 'form-control','placeholder'=>'Ingresa la ocupación', 'required']) }}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción:') !!}
	{!! Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Descripción breve de la ocupacion','rows'=>'2', 'required']) !!}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success float-right', 'title'=>'¡Este boton en para actualizar la ocupación!'])  }}
</div>