<template lang="html">
	<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
		<div class="card card-default">
			<div class="card-header">
				<h2 class="card-title"><a :href="'/products/'+product.id">{{ product.title }}</a></h2>
			</div>
			<div class="card-body">
				<div class="row">	
					<div class="col-6">
						<img class="card-img-rigth img-fluid"  :src="'/productos/imagenes/'+product.imagen" alt="Imagen">
					</div>
					<div class="col-6">
						<h4 class="card-subtitle"><strong>Precio: </strong>{{ product.price }}</h4>
						<p class="card-text"><strong> Descripción: </strong>{{ product.description }}</p>
						<!-- <p class="card-text"><strong>Ingredientes: </strong>{{ product.ingredients }}</p> -->
					</div>
				</div>
			</div>
		</div>
		<br>		
	</div>
</template>

<script>
	export default{
		props:{
			product:{
				type:Object
			}
		}
	}
</script>