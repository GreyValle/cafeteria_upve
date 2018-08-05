<div class="form-group">
	{{ Form::label('estatus','Estatus orden:') }}
	{{ Form::text('estatus', null, ['class' => 'form-control','placeholder'=>'Ingresa el estatus', 'required']) }}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripción:') !!}
	{!! Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Descripción breve del estatus','rows'=>'2', 'required']) !!}
</div>

<hr>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
</div>
