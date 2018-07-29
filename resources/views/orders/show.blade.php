@extends('layouts.app')
@section('content')
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
			<div class="card" style="margin: 3px">
				<div class="card-header">
	                <div class="row">
	                    <div class="col-lg-4 col-sm-8 col-xs-12">
	                        <h1 class="card-title">{{ $dato->nombre }}</h1>
	                    </div>
	                    <div class="col-lg-4 col-sm-4 col-xs-12">
	                    	<button type="" class="btn btn-success float-right">Ordenar</button>
	                	</div>
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
							<br>
							<h4 class="card-subtitle"><strong>Precio: </strong>${{ $dato->precio }}</h4> 
							<br>
							<p class="card-text"><strong>Descripción: </strong>{{ $dato->descripcion }}</p>
							<p class="card-text"><strong>Ingredientes: </strong>{{ $dato->ingredientes }}</p>
						</div>
					</div>
				</div>			
			</div>	
		</div>
	</div>
@endsection