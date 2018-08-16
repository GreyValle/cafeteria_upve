<template>
    <!-- <div class="container"> -->
        <div class="row justify-content-center">
            <div class="col-12"> 
            <div class="card card-default padding box-shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <input v-if="editMode" type="text" class="form-control input-sm" v-model="comentario.comentario">
                            <p v-else><strong>{{ comentario.comentario }}</strong></p>
                        </div>
                        <div class="col-6">
                            <span class="text-muted float-right">Creado {{ comentario.created_at }}</span>
                        </div>
                    </div>          
                </div>
                <div class="card-body">
                    <input v-if="editMode" type="text" class="form-control input-sm"  v-model="comentario.descripcion">
                    <p v-else >{{ comentario.descripcion }}</p>
                </div>
                <div class="card-footer">    
                    <div class="row">
                        <div class="col-6">
                            <button v-if="editMode" class="btn btn-sm btn-outline-success" v-on:click="onClickUpdate()">Guardar cambios</button>
                            <button v-else class="btn btn-sm btn-outline-secondary" v-on:click="onClickEdit()">Editar</button>
                            <button class="btn btn-sm btn-outline-danger" v-on:click="onClickDelete()">Eliminar</button>
                        </div>
                        <div class="col-6">
                            <div>
                                <p class="float-right">{{ comentario.updated_at }}</p>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>       
            </div>  
        </div>
    <!-- </div> -->
</template>

<script>
    export default {
        props:['comentario'], 
        data(){
            return{  
                editMode:false    
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            onClickDelete(){
                axios.delete(`/comentarios-usuario/${this.comentario.id}`).then(()=>{
                    this.$emit('delete');
                });
            },
            onClickEdit(){
                this.editMode=true;
            },
            onClickUpdate(){
                const params={
                    comentario:this.comentario.comentario,
                    descripcion:this.comentario.descripcion
                }
                axios.put(`/comentarios-usuario/${this.comentario.id}`,params).then((response)=>{
                    this.editMode=false;
                    const comentario=response.data;
                    // console.log(comentario);
                    this.$emit('update',comentario);
                    
                });
            }
        }
    }
</script>
