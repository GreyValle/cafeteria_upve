<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10"> 
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <input v-if="editMode" type="text" class="form-control" v-model="rol.rol">
                            <p v-else><strong>{{ rol.rol }}</strong></p>
                        </div>
                        <div class="col-6">
                            <span class="text-muted float-right">Creado {{ rol.created_at }}</span>
                        </div>
                    </div>          
                </div>
                <div class="card-body">
                    <input v-if="editMode" type="text" class="form-control"  v-model="rol.descripcion">
                    <p v-else >{{ rol.descripcion }}</p>
                </div>
                <div class="card-footer">    
                    <div class="row">
                        <div class="col-6">
                            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar cambios</button>
                            <button v-else class="btn btn-primary" v-on:click="onClickEdit()">Editar</button>
                            <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
                        </div>
                        <div class="col-6">
                            <div>
                                <p class="float-right">{{ rol.updated_at }}</p>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>       
            </div>  
        </div>
    </div>
</template>

<script>
    export default {
        props:['rol'], 
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
                axios.delete(`/roles-vue/${this.rol.id}`).then(()=>{
                    this.$emit('delete');
                });
            },
            onClickEdit(){
                this.editMode=true;
            },
            onClickUpdate(){
                const params={
                    rol:this.rol.rol,
                    descripcion:this.rol.descripcion
                }
                axios.put(`/roles-vue/${this.rol.id}`,params).then((response)=>{
                    this.editMode=false;
                    const rol=response.data;
                    // console.log(rol);
                    this.$emit('update',rol);
                    
                });
            }
        }
    }
</script>
