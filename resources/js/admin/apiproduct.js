const apiproduct = new Vue({
    el: '#apiproduct',
    data: {
        nombre: '',
        slug: '',
        div_mensajeslug:'Slug Existe',
        div_clase_slug: 'badge badge-danger',
        div_aparecer: false,
        deshabilitar_boton:1,

        //variables de precios
        precio:0,
        peso:0,
    }, 
    computed: {
        generarSLug : function(){
            var char= {
                "á":"a","é":"e","í":"i","ó":"o","ú":"u",
                "Á":"A","É":"E","Í":"I","Ó":"O","Ú":"U",
                "ñ":"n","Ñ":"N"," ":"-","_":"-"
            }
            var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;

            this.slug =  this.nombre.trim().replace(expr, function(e){
                return char[e]
            }).toLowerCase()

           return this.slug;
           //return this.nombre.trim().replace(/ /g,'-').toLowerCase()
        },


    },
    methods: {
        eliminarimagen(imagen) { 
            //console.log(imagen);

            Swal.fire({
                title: '¿Estas seguro de eliminar la imagen '+ imagen.id+ '?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, Eliminar!',
                cancelButtonText: 'Cancelar'
              }).then((result) => {
                if (result.value) {

                    let url = '/api/eliminarimagen/'+imagen.id;
                    axios.delete(url).then(response => {
                         console.log(response.data);
                    });

                  //eliminar el elemento
                  var elemento = document.getElementById('idimagen-'+imagen.id);
                  //console.log(elemento);
                  elemento.parentNode.removeChild(elemento);
                    
                  Swal.fire(
                    '¡Eliminado!',
                    'La imagen ha sido eliminada',
                    'success'
                  )
                }
              })


        },

        getProduct() {

            if (this.slug) {
                let url = '/api/product/'+this.slug;
                axios.get(url).then(response => {
                this.div_mensajeslug = response.data;
                    if (this.div_mensajeslug==="Slug Disponible") {
                        this.div_clase_slug = 'badge badge-success';
                        this.deshabilitar_boton=0;
                    } else {
                        this.div_clase_slug = 'badge badge-danger';
                        this.deshabilitar_boton=1;
                    }
                    this.div_aparecer = true;

                    if (data.datos.nombre) {
                        if (data.datos.nombre===this.nombre) {
                            this.deshabilitar_boton=0;
                            this.div_mensajeslug='';
                            this.div_clase_slug='';
                            this.div_aparecer = false;

                        }
                    }

                })

            }else{
                this.div_clase_slug = 'badge badge-danger';
                this.div_mensajeslug="Debes escribir un producto";
                this.deshabilitar_boton=1;
                this.div_aparecer = true;


            } 
            



        }
    },
    mounted(){
        if (data.editar=='si') {
            this.nombre = data.datos.nombre;
            this.precio = data.datos.precio;
            this.peso = data.datos.peso;
            this.deshabilitar_boton=0;

        }


        console.log(data);
    }

});