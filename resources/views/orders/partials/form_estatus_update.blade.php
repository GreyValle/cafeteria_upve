{!! Form::model($orden, ['route' => ['orders.update', $orden->id],'method' => 'PUT' ]) !!}
	<div>
		<strong>{!! Form::label('orden_estatus_id','Cambiar estatus:') !!}</strong>
		{!! Form::select('orden_estatus_id',$estatus,$orden->orden_estatus_id,['class'=>'form-control','required']) !!}
	</div>
	<hr>
	<div>
		{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
	</div>
{!! Form::close() !!}