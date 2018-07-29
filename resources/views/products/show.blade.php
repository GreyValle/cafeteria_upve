@extends('layouts.app')
@section('content')
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
			<div class="card" style="margin: 3px">
				<div class="card-header">
	         
	                    <div class="text-center">
	                        <h1 class="card-title">{{ $dato->nombre }}</h1>
	                    </div>
	                     
	            </div>
		        <div class="card-body">
					<div class="row">	
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
							@if ($dato->imagen)
								<img  class="card-img-left img-fluid" src="{{ url("/productos/imagenes/$dato->imagen") }}" alt="Imagen">
							@else
								<img  class="card-img-left img-fluid" src="{{ url('ejemplo.jpg') }}" alt="Imagen">
							@endif
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6" style="font-size: large;">
							<div class="form-group">								
								<h4 style="padding-top: 1em" class="card-subtitle"><strong>Precio: </strong>${{ $dato->precio }}</h4> 
							</div>
							<div class="form-group">
								<p class="card-text"><strong>Descripción: </strong>{{ $dato->descripcion }}</p>
							</div>
							<div class="form-group">
								<p class="card-text"><strong>Ingredientes: </strong>{{ $dato->ingredientes }}</p>
							</div>
					
							<form method="POST" action="{{ route('orders.store') }}" role="form">
							{{ csrf_field() }}

								<input type="hidden" name="id_producto" class="form-control input-sm" required="" value="{{ $dato->id }}">
								<input type="hidden" name="id_cliente" class="form-control input-sm" required="" value="{{ Auth::user()->id }}">
								<input type="hidden" name="total" class="form-control input-sm" required="" value="{{ $dato->precio }}">
								<div class="form-group">	
									<label for="fecha_entregar"><strong>Fecha/hora entregar: <input type="date" name="fecha_entregar" class="form-control input-sm" required="">
									<input type="time" name="hora_entregar" class="form-control input-sm" required="" ></strong></label>
									
	                           	</div>
	                           	<button type="submit" class="btn btn-outline-success btn-xs" >Ordenar</button>
	                        </form>	
	                        <div class=""  style="">
                            	<a class="btn btn-outline-secondary " href="{{action('ProductsController@edit', $dato->id)}}" >Editar
                            	</a>
                            </div>
						</div>
						
					</div>
				</div>			
			</div>	
		</div>
	</div>
@endsection