<template>
    <!-- <div class="container"> -->
        <div class="row justify-content-center">
            <div class="col-12"> 
            <div class="card card-default padding box-shadow">
                <div class="card-header" style="font-size: large;"><strong>Registrar comentario</strong></div>
                <div class="card-body">
                    <form action="" v-on:submit.prevent="newRol()" >
                        <div class="form-group">
                            <label for="comentario">Título:</label>    
                            <input type="text" name="comentario" class="form-control input-sm" placeholder="Ingresa título del comentario" required="" v-model="comentario">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control input-sm" placeholder="Describe el comentario" required=""  v-model="descripcion"></textarea>            
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-sm btn-outline-secondary float-right">Guardar</button>
                    </form>
                </div>         
            </div>       
            </div>
        </div>
    <!-- </div> -->
</template>

<script>
    export default {
        data(){
            return{
                comentario:'',
                descripcion:''
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            newRol(){
                const params={
                    comentario:this.comentario,
                    descripcion:this.descripcion
                };

                this.comentario='';
                this.descripcion='';

                axios.post('/comentarios-usuario', params).
                    then((response)=>{
                        const comentario=response.data;
                        // console.log(response.data);
                        this.$emit('new',comentario);
                });
            
            }
        }
    }
</script>
