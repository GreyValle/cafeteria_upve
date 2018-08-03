<div class="form-group">
	{{ Form::label('tipo_sangre','Ocupación:') }}
	{{ Form::text('tipo_sangre', null, ['class' => 'form-control','placeholder'=>'Ingresa la ocupación', 'required']) }}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success float-right', 'title'=>'¡Este boton en para actualizar o guardar el tipo!'])  }}
</div>