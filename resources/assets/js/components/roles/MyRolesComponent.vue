<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form-roles-component @new="addRol"></form-roles-component>
            <rol-component 
                v-for="(rol,index) in roles" 
                :key="rol.id"
                :rol="rol"
                @update="updateRol(index, ...arguments.data)"
                @delete="deleteRol(index)">
            </rol-component>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                roles:[]
            }
        },
        mounted(){
            axios.get('/roles-vue').then((response)=>{
                this.roles=response.data;
            });
        },
        methods:{
            addRol(rol){
                this.roles.push(rol);

            },
            updateRol(index, rol){
                this.roles[index]=rol;
             // console.log(this.roles[index]=rol);
            },
            deleteRol(index){
                this.roles.splice(index,1);
            }
        }
    }
</script>
