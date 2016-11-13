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
        }
    }
});

   new Vue({
       el: '#wrapper',
       components: 'datos_contacto'
   });