{!! Form::model($user, ['route' => ['users.update_saldo', $user->id],'method' => 'PUT' ]) !!}
	<div class="form-group">
		<strong>{{ Form::label('saldo','Actualizar Saldo:') }}</strong>
		{{ Form::number('saldo_abonado', null, ['class' => 'form-control', 'step'=>'0.01', 'min'=>'0', 'required', 'placeholder'=>'Ingresa cantidad de saldo']) }}
		{{ Form::hidden('saldo', null, ['class' => 'form-control', 'step'=>'0.01', 'min'=>'0', 'required']) }}
	</div>
	<hr>
	<div>
		{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
	</div>
{!! Form::close() !!}