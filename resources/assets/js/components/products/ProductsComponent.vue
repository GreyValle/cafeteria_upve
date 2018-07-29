<template lang="html">
	<section>
		<material-transition-group tag="div" class="row">
			<product-card-component :key="product.id" :data-index="index" v-bind:product="product" v-for="(product,index) in products" ></product-card-component>
		</material-transition-group>	
	</section>	
</template>

<script>
	export default{
		data(){
			return{
				name: 'Component GREY',
				products: [],
				endpoint: "/productos"
			}
		},
		
		created(){
			this.fetchProducts();
		},
		
		methods: {
			fetchProducts(){
				axios.get(this.endpoint).then((response)=>{
					console.log(response.data.data);
					this.products=response.data.data;
				});
			},
			beforeEnter(el){
				el.style.opacity=0;
				el.style.transform="scale(0)";
				el.style.transition="all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)"
			},
			enter(el){
				const delay= 200 * el.dataset.index;
				setTimeout(()=>{
					el.style.opacity=1;
					el.style.transform="scale(1)";
				},delay);
			},
			leave(el){
				el.style.opacity=0;
				el.style.transform="scale(0)";
			},

		}

	}
</script>