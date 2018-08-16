<template>
    <div class="row justify-content-center">
        <div class="col-xm-12 col-sm-12 col-md-10">
            <form-roles-component @new="addRol"></form-roles-component>
        
            <rol-component 
                v-for="(comentario,index) in comentarios" 
                :key="comentario.id"
                :comentario="comentario"
                @update="updateRol(index, ...arguments.data)"
                @delete="deleteRol(index)">
            </rol-component>
            <br>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                comentarios:[]
            }
        },
        mounted(){
            axios.get('/comentarios-usuario').then((response)=>{
                this.comentarios=response.data;
            });
        },
        methods:{
            addRol(comentario){
                this.comentarios.push(comentario);

            },
            updateRol(index, comentario){
                this.comentarios[index]=comentario;
             // console.log(this.comentarios[index]=comentario);
            },
            deleteRol(index){
                this.comentarios.splice(index,1);
            }
        }
    }
</script>
