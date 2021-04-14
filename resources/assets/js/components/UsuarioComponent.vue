<template>
    <div class="panel panel-default">
        <div class="panel-heading">Agregado el {{usuario.fecha_creacion}}</div>

            <div class="panel-body">
                
                <input v-if="editMode" type="text" class="form-control" v-model="usuario.nombre">
                <p v-else>{{usuario.nombre}}</p>
                

            </div>

            <div class="panel-footer">
                <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">
                        Guardar Cambios
                </button>

                 <button v-else class="btn btn-default" v-on:click="onClickEdit()">
                        Editar
                </button>

                <button class="btn btn-danger" v-on:click="onClickDelete()">
                        Eliminar
                </button>     
            </div>
    </div>
</template>

<script>
import MiUsuarioComponentVue from './MiUsuarioComponent.vue';
    export default {
        props:['usuario'],

        data(){
            return{
                editMode: false
            };
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            onClickDelete(){
                this.$emit('delete');

                /* base de datos
                axios.delete(`/usuarios/${this.usuario.id}`).then(() => {
                    this.$emit('delete');
                });
                */
            },

            onClickEdit(){
                this.editMode = true;
            },

             onClickUpdate(){
                this.editMode = false;
                this.$emit('update');

                /* base de datos
                const params = {
                    nombre: this.usuario.nombre
                };
                axios.put(`/usuarios/${this.usuario.id}`, params).then((response) => {
                    this.editMode = false;
                    const usuario = response.data;
                    this.$emit('update', usuario);
                });
                */
            }
        }

    }
</script>
