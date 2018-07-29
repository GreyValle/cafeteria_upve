<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10"> 
            <div class="card card-default">
                <div class="card-header">Registra nuevo rol</div>
                <div class="card-body">
                    <form action="" v-on:submit.prevent="newRol()" >
                        <div class="form-group">
                            <label for="rol">Rol:</label>    
                            <input type="text" name="rol" class="form-control" placeholder="Ingresa un rol" required="" v-model="rol">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control" placeholder="Describe el rol del usuario" required=""  v-model="descripcion"></textarea>            
                       </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>         
            </div>       
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                rol:'',
                descripcion:''
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            newRol(){
                const params={
                    rol:this.rol,
                    descripcion:this.descripcion
                };

                this.rol='';
                this.descripcion='';

                axios.post('/roles-vue', params).
                    then((response)=>{
                        const rol=response.data;
                        // console.log(response.data);
                        this.$emit('new',rol);
                });
            
            }
        }
    }
</script>
