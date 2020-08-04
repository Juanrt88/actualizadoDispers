<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa Hombre</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo_catalogo.css">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="section">
        <div class="container-fluid">
            <div class="row position-relative">
                <!-- MENU LATERAL -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 contenedor-menu m-0 pt-0 d-inline-block">
                    <a href="#" class="btn-menu p-2 w-100">Menu<i class="icono fas fa-bars"></i></a>
                    <ul class="menu ">
                        <li><a href="#">Inicio</a></li>
                        <li id="cat-ropa"><a href="#">Ropa<i class="icono derecha fas fa-chevron-down"></i></a>
                            <ul>
                                <li id="cat-ropa-mujer"><a href="catalogo_mujer.php">Mujer</a></li>
                                <li id="cat-ropa-hombre"><a href="catalogo_hombre.php">Hombre</a></li>
                                <li id="cat-ropa-ninos"><a href="catalogo_ninos.php">Niños y niñas</a></li>
                            </ul>
                        </li>
                        <li id="cat-accesorios"><a href="#">Accesorios<i class="icono derecha fas fa-chevron-down"></i></a>
                            <ul>
                                <li id="cat-acces-mujer"><a href="catalogo_gorras.php">Billeteras</a></li>
                                <li id="cat-acces-gorras"><a href="catalogo_gorras.php">Gorras</a></li>
                                <li id="cat-acces-ninos"><a href="catalogo_gorras.php">Varios</a></li>
                            </ul>
                        </li>
                        <li id="cat-articulosh"><a href="#">Articulos del hogar<i class="icono derecha fas fa-chevron-down"></i></a>

                            <ul>
                                <li id="cat-acces-mujer"><a href="catalogo_accesorios_tazas.php">Tazas</a></li>
                                <li id="cat-acces-hombre"><a href="catalogo_accesorios_tazas.php">Posters</a></li>
                                <li id="cat-acces-hombre"><a href="catalogo_accesorios_tazas.php">Padmouse</a></li>
                                <li id="cat-acces-ninos"><a href="catalogo_accesorios_tazas.php">Varios</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <!-- MENU LATERAL -->

                <!-- CATALOGO DE PRODUCTOS -->
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 border d-inline-block contenedor-catalogo m-0 p-0">
                    <div class="w-100">
                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-bachata_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA BAILAR BACHATA</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>

                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-nah_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA NAH</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>


                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-power_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA GIRL POWER</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- CATALOGO DE PRODUCTOS -->
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

<!-- LIBRERIAS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- <script src="boton-menu.js"></script> -->
<!-- LIBRERIAS -->

<script>
    $(document).ready(function() {
        $('#cat-ropa-mujer').addClass('seleccionado');
        // $('#cat-accesorios ul').slideUp();
        $('#cat-accesorios ul').slideUp();
        $('#cat-articulosh ul').slideUp();
        
    });
    $(".btn-menu").click(function() {
        $(".contenedor-menu .menu").slideToggle("slow");
    });
    $("#cat-ropa").click(function() {
        $('#cat-ropa ul').slideToggle();
        // $('#cat-ropa').addClass('seleccionado');
    });
    $("#cat-accesorios").click(function() {
        $('#cat-accesorios ul').slideToggle();
        // $('#cat-ropa').addClass('seleccionado');
    });
    $("#cat-articulosh").click(function() {
        $('#cat-articulosh ul').slideToggle();
        // $('#cat-ropa').addClass('seleccionado');
    });

    $('product-catalog').click(function(e) {
        window.location.replace("http://stackoverflow.com");

    });
</script>

</html>