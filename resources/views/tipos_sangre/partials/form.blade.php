<div class="form-group">
	{{ Form::label('tipo_sangre','Tipo de sangre:') }}
	{{ Form::text('tipo_sangre', null, ['class' => 'form-control','placeholder'=>'Ingresa el tipo de sangre', 'required']) }}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-secondary float-right', 'title'=>'¡Este botón en para actualizar o guardar el tipo!'])  }}
</div>