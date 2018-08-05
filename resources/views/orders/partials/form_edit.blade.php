<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{{ Form::label('id','Código:') }}
			{{ Form::number('id', null, ['class' => 'form-control', 'required', 'disabled']) }}
		</div>
		<div class="form-group">
			{!! Form::label('product_id','Menú:') !!}
			{!! Form::select('product_id',$productos,$orden->product_id,['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{{ Form::label('user_id','Cliente:') }}
			{{-- {{ Form::number('user_id', null, ['class' => 'form-control', 'step'=>'1', 'min'=>'0', 'required']) }} --}}
			{!! Form::select('user_id',$users,$orden->user_id,['class'=>'form-control','required' ,'disabled' ]) !!}
		</div>
		<div class="form-group">
			{{ Form::label('total','total:') }}
			{{ Form::number('total', null, ['class' => 'form-control', 'step'=>'0.01', 'min'=>'0','disabled' ,'required']) }}
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">	
			<label for="fecha_entregar">Fecha entregar: </label>
			{{ Form::date('fecha_entregar', null, ['class' => 'form-control', 'required']) }}
		</div>
		<div class="form-group">
			<label for="hora_entregar">Hora entregar: </label>
			{{ Form::time('hora_entregar', null, ['class' => 'form-control', 'required']) }}
		</div>
		<div class="form-group">
			{!! Form::label('orden_estatus_id','Cambiar estatus:') !!}
			{!! Form::select('orden_estatus_id',$estatus,$orden->orden_estatus_id,['class'=>'form-control','required']) !!}
		</div>

	</div>			
</div>
<hr>
<div>
	{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-outline-secondary float-right'])  }}
</div>