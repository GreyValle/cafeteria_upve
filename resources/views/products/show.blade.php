@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>{{ $producto->nombre }}</strong>
                    @can('products.index')
                        <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary float-right">Volver</a>
                    @endcan
                    
                </div>
                <div class="card-body" style="font-size: large;">
                	<div class="row">
	                    <div class="col-md-6">
	                        <img  class="card-img-left img-fluid" src="{{ url("/productos/imagenes/$producto->imagen") }}" alt="Imagen">
	                    <hr>
	                    </div>  
	                    <div class="col-md-6">
	                    	<div class="form-group">								
								<p class="card-subtitle"><strong>Precio: </strong>${{ $producto->precio }}</p> 
							</div>

							<div class="form-group">
								<p class="card-text"><strong>Descripción: </strong>{{ $producto->descripcion }}</p>
							</div>
							<div class="form-group">
								<p class="card-text"><strong>Ingredientes: </strong>{{ $producto->ingredientes }}</p>
							</div>
							@can('orders.create')
							<form method="POST" action="{{ route('orders.store') }}" role="form">
								{{ csrf_field() }}
								<input type="hidden" name="product_id" class="form-control input-sm" required="" value="{{ $producto->id }}">
		
								<input type="hidden" name="total" class="form-control" required="" value="{{ $producto->precio }}">
								
								<div class="form-group">	
									<label for="fecha_entregar"><strong>Fecha/hora entregar: </strong></label>
									<input type="date" name="fecha_entregar" class="form-control" required="">
									<input type="time" name="hora_entregar" class="form-control input-sm" required="" >
								</div>
								@if ($producto->precio <= \Auth::user()->saldo)
									<button style="width: 100%;" type="submit" class="btn btn-outline-success btn-sm" >Ordenar</button>
								@else
									<div style="width: 100%;"  class="btn btn-danger btn-sm" >Saldo insuficiente</div>
								@endif
							</form>	
							@endcan
							@can('products.edit')
                            	<td width="10px">
                                	<a style="width: 100%"class="btn btn-outline-primary btn-sm" href="{{route('products.edit', $producto->id) }}">
                                		Editar
                                	</a>
                                </td>
                            @endcan
							@can('products.destroy')
			                	{!! Form::open(['route' => ['products.destroy', $producto->id],'method' => 'DELETE']) !!}
			                		{{csrf_field()}}
			                        <input name="_method" type="hidden" value="DELETE">
			                        <button style="width: 100%;" type="submit" class="btn btn-outline-danger btn-sm">
			                        	Eliminar
			                        </button>
			                    {!! Form::close() !!}
			                @endcan
	                    </div>

                    </div>
                </div>
                <div class="card-footer text-center">
	                @can('orders.create')
	                	<em>Gracias por su preferencia</em>
	                @endcan
	             
	                @can('products.edit' )
		            	<em>Última actualización: {{ $producto->updated_at ?:"Desconocido" }}</em> 
	                @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
