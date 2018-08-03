<div class="form-group">
	{{ Form::label('estatus','Estatus:') }}
	{{ Form::text('estatus', null, ['class' => 'form-control','placeholder'=>'Ingresa el estatus', 'required']) }}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción:') !!}
	{!! Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Descripción breve del estatus','rows'=>'2', 'required']) !!}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success float-right', 'title'=>'¡Este boton en para actualizar el estatus social!'])  }}
</div>