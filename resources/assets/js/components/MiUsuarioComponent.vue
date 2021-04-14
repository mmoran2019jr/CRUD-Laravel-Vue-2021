<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form-component @new="addUsuario"></form-component>
            
            <usuario-component 
                v-for="(usuario, index) in usuarios" 
                :key="usuario.id"
                :usuario="usuario"
                @update="updateUsuario(index, ...arguments)"
                @delete="deleteUsuario(index)">
            </usuario-component>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
               usuarios: []
            }
        },

        mounted() {
            axios.get('/usuarios').then((response) => {
                this.usuarios = response.data;
            });
        },

        //Metodos de CRUD
        methods:{
            addUsuario(usuario){
                this.usuarios.push(usuario);
            },

            updateUsuario(index, usuario){
                this.usuarios[index] = usuario;
            },

            deleteUsuario(index){
                this.usuarios.splice(index, 1);
            },
        }
    }
</script>