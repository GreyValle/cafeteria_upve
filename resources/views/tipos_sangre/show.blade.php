@extends('layouts.app')
@section('content')
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
			<div class="card">
				<header  class="padding text-center bg-primary">
					<h1 class="card-title">{{ $dato->tipo_sangre }}</h1>
				</header><!-- /header -->				
			
			</div>	
		</div>
	</div>
@endsection