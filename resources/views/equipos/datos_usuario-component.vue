<template>
    <div  v-if="!editing">
        <strong><i class="fa fa-book margin-r-5"></i> @{{ titulo }}</strong>
        <p class="text-muted">
            <span id="span_nombre">@{{ nombre }}</span><br>
            <span id="span_tlf">@{{ telefono }}</span><br>
            <a href="#" id="span_email">@{{ email }}</a><br>
        </p>
        <button class="btn btn-primary btn-xs" @click.prevent="edit">Edición Rápida</button><br>
    </div>
    <form action="" v-else>
        <strong><i class="fa fa-book margin-r-5"></i> @{{ titulo }}</strong>
        <input type="text" id="txtNombre" v-model="nombre" style="width: 100%">
        <input type="text" id="txtTlf" v-model="telefono" style="width: 100%">
        <input type="text" id="txtEmail" v-model="email" style="width: 100%"><br> <br>
        <p><button class="btn btn-primary btn-xs" @click.prevent="edit">Guardar</button></p>
    </form>
</template>

<script>
    Vue.component('datos_contacto', {
        template: '#datos_contacto-template',
        data: function () {
            return {
                nombre: "",
                email: "",
                telefono: "",
                editing: false
            }
        },
        props: ['user_id', 'titulo'],

        created: function () {
            var vm = this;
            $.ajax( "/api/get_datos_contacto/" + this.user_id )
                    .done(function(info) {
                        console.info(info);
                        vm.nombre = info.nombre;
                        vm.email = info.email;
                        vm.telefono = info.telefono;
                    })
                    .fail(function() {
                        alert( "error" );
                    });
        },
        methods: {
            edit: function () {
                this.editing = !this.editing;
                console.log(this.nombre);
            }
        }
    });
//
//    new Vue({
//        el: '#wrapper',
//        components: 'datos_contacto'
//    });
</script>