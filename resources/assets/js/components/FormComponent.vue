<template>
    <div class="panel panel-default">
        <div class="panel-heading">Agregar Usuarios</div>
            <div class="panel-body">
                    <form action="" v-on:submit.prevent="newUsuario()">
                        <div class="form-group">
                            <label for="">Nuevo Usuario</label>
                            <input type="text" class="form-control" name="usuario" v-model="nombre">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Añadir Usuario
                        </button>
                    </form>
            </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                nombre : ''
            };
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            newUsuario(){
              const fecha = new Date();
              const fechaCreacion = fecha.toDateString();

              const params={
                  nombre: this.nombre,
                  fecha_creacion: fechaCreacion
              }
                this.nombre = '';

                if(params.nombre.length == 0){
                    alert("Debe agregar un nombre");
                }else{
                    this.$emit('new', params);
                }  
                
                //axios.post('/thoughts', params)
            }
        }
    }
</script>
