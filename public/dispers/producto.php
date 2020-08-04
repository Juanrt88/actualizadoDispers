<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>

    <link rel="stylesheet" href="css/estilo_producto.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Incluimos el header, con esto tambien se incluyen todas las librerias -->
    <?php
    include "header.php";
    ?>

    <div class="section">
        <!-- ventana flotante cuando se pulsa agregar carrito -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Camiseta Daddy Shark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Producto añadido al carrito
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> <a href="carrito.php">Ver Carrito</a></button>
                        
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin -->

        <div class="container">

            <div class="row">
                <div class="col col-12 col-sm-12 col-md-7 col-lg-6 container-imagenes-min">
                    <div class="producto-imagen-grande zoom">
                        <img src="images/camisa-tiburon_1_blanco.jpg" alt="" class="zoom img-responsive" id="img-grande">
                    </div>

                    <div id="lista-imagenes">
                        <img src="images/camisa-tiburon_1_blanco.jpg" id="img-1" class="miniatura activado mano">
                        <img src="images/camisa-tiburon_2_blanco.jpg" id="img-2" class="miniatura mano">
                        <img src="images/camisa-tiburon_3_blanco.jpg" id="img-3" class="miniatura mano">
                    </div>

                </div>
                <div class="col col-12 col-sm-12 col-md-5 col-lg-6 container-info">
                    <div id="deter-producto-nombre">
                        <h3>Camiseta Baby Shark</h3>
                    </div>
                    <div id="deter-producto-descripcion">
                        Camiseta con estampado de tiburon, daddy shark
                    </div>
                    <br>
                    <div id="deter-producto-precio">
                        <h3>19.99 $</h3>
                    </div>
                    <br>
                    <h5>Color</h5>
                    <div id="determ-producto-colores">
                        <button class="boton-color amarillo"></button>
                        <button class="boton-color azul"></button>
                        <button class="boton-color blanco"></button>
                        <button class="boton-color negro"></button>
                    </div>
                    <br>
                    <div class="container-talla">
                        <h5>Talla</h5>
                        <div class="opc-talla">
                            <select name="" id="tallas-disponibles">

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="container-cantidad">
                        <h4>Cantidad</h4>

                        <div class="texto-no-seleccionable mano" id="btn-menos"><i class="fas fa-minus"></i></div>
                        <div class="texto-no-seleccionable" id="id_num_prenda">1</div>
                        <div class="texto-no-seleccionable mano" id="btn-mas"><i class="fas fa-plus"></i></div>
                    </div>
                    <br>
                    <button type="button" id="añadir-carrito" class="btn btn-danger d-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>

                </div>


            </div>

            <div class="similar-product">
                <h4>Productos similares</h4>

                <div class="slider-items">

                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-rubik_1_negro.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta Rubik hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>

                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-foco_1_blanco.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta foco hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>
                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-motivacion1_1_negro.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta frase hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>
                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-rubik_1_negro.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta Rubik hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>

                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-rubik_1_negro.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta Rubik hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>

                    <div class="item-recommend d-inline-block mano">
                        <img src="images/camisa-rubik_1_negro.jpg" alt="" class="img-product-recommend">
                        <div class="article__name" title="Camiseta hombre">
                            <h5>Camiseta Rubik hombre</h5>
                        </div>
                        <div class="price__now-price">
                            <h5>19.99$</h5>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Incluimos el footer, con esto tambien se incluyen todas las librerias -->
    <?php
    include "footer.php";
    ?>
    <!-- LIBRERIAS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- <script src="js/popper.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>
    <!-- FIN-->


    <!-- Para el efecto zoom sobre la imagen -->
    <script>
        // Este script intercambia las imagenes y hace el efecto zoom
        $(document).ready(function() {

            var img_actual = document.getElementById("img-grande").src;
            $('.producto-imagen-grande').zoom({
                url: img_actual,
                magnify: 1.5
            });
            $(function() {
                $('.miniatura').click(function() {
                    var id = $(this).attr('id');
                    $('#lista-imagenes').children().removeClass("activado");
                    $("#" + id).addClass("activado");
                    img_actual = document.getElementById(id).src;
                    $('#img-grande').attr('src', img_actual);
                    $('.producto-imagen-grande').zoom({
                        url: img_actual,
                        magnify: 1.5
                    });
                });
            });

            $(function() {
                $('.boton-color').click(function() {
                    var colorR = $(this).attr('class').split(/\s+/);
                    colorReq = colorR[1];
                    var ubicacion = $('#img-grande').attr('src').split("_");
                    $('#img-grande').attr('src', ubicacion[0] + "_" + ubicacion[1] + "_" + colorR[1] + ".jpg");
                    $('#img-1').attr('src', ubicacion[0] + "_1_" + colorR[1] + ".jpg");
                    $('#img-2').attr('src', ubicacion[0] + "_2_" + colorR[1] + ".jpg");
                    $('#img-3').attr('src', ubicacion[0] + "_3_" + colorR[1] + ".jpg");

                    $('.producto-imagen-grande').zoom({
                        url: ubicacion[0] + "_" + ubicacion[1] + "_" + colorR[1] + ".jpg",
                        magnify: 1.5
                    });

                });
            });

            $(function() {
                var tallas = ["XS", "S", "M", "L", "XL", "XXL"];
                for (var i = 0; i < tallas.length; i++) {
                    var option = document.createElement("option");
                    $(option).html(tallas[i]);
                    $(option).appendTo("#tallas-disponibles");
                }
            });

            $(function() {
                $('#btn-menos').click(function() {
                    var n = parseInt($('#id_num_prenda').text()) - 1;
                    if (n <= 0) {
                        n = 1;
                    }
                    $('#id_num_prenda').text(n.toString());
                });

                $('#btn-mas').click(function() {
                    var n = parseInt($('#id_num_prenda').text()) + 1;
                    if (n >= 50) {
                        n = n - 1;
                    }
                    $('#id_num_prenda').text(n.toString());
                });
            });



        });
    </script>

</body>



</html>