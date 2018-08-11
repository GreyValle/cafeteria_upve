<template lang="html">
	<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
		<div class="card card-default box-shadow">
			<div class="card-header text-center">
				<h2 class="card-title"><a :href="'/products/'+product.id">{{ product.title }}</a></h2>
			</div>
			<img class="img-fluid" :src="'/productos/imagenes/'+product.imagen" alt="Imagen">
			<div class="card-footer">
				<div class="form-group">
					<p class="card-subtitle"><strong>Precio: {{ product.price }}</strong></p>
					<p class="card-text"><strong>Descripción: </strong>{{ product.description }}</p>
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