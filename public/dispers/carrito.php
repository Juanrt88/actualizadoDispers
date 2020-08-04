<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito compras</title>
    <link rel="stylesheet" href="css/estilo_carrito_pago_compras.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Incluimos el header,  -->
    <?php
    include "header.php";
    ?>
    <!-- <div class="section"> -->
    <br>
    <div class="container-fluid">
        <div class="row">

            <!-- PRODUCTOS EN LA CESTA-PARTE IZQUIERDA -->
            <div class="col col-xs-12 col-sm-12 col-md-7 col-lg-7 container-iquierdo">
                <div class="position-relative">
                    <h2 class="display-4">Cesta de productos</h2>
                    <p id="btn-vaciar-carrito"><i class="fas fa-trash mano"></i></p>
                    <hr class="separador-carrito">
                </div>

                <div class="container carrito w-100">
                    <!-- Plantila-->
                    <div class="row item-carrito border rounded">
                        <div class="container-imagen d-inline-block">
                            <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                        </div>
                        <div class="info-item-carrito d-inline-block ">
                            <h5><a href="#">Camiseta Rubik</a></h6>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h6>
                                    <br>
                                    <h6 class="d-inline-block">Talla: </h6>
                                    <select name="" id="tallas-disponibles">
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">X</option>
                                    </select>
                                    <br>
                                    <h5 class="d-inline-block">19.99 $</h5>
                        </div>
                        <div class="modificar-cantidad d-inline-block ">
                            <button type="button" class="restar-cantidad btn-circular d-inline-block border-0"><i class="fas fa-minus"></i></button>
                            <p class=" cantidad-producto d-inline-block">1</p>
                            <button type="button" class="sumar-cantidad btn-circular d-inline-block  border-0"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="button" class="btn-danger border-0 btn-elimina-producto"><i class="fas fa-trash"></i></button>
                    </div>
                    <!-- Plantila-->

                    <!-- Copias -->

                    <div class="row item-carrito border rounded">
                        <div class="container-imagen d-inline-block">
                            <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                        </div>
                        <div class="info-item-carrito d-inline-block ">
                            <h5><a href="#">Camiseta Rubik</a></h6>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h6>
                                    <br>
                                    <h6 class="d-inline-block">Talla: </h6>
                                    <select name="" id="tallas-disponibles">
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">X</option>
                                    </select>
                                    <br>
                                    <h5 class="d-inline-block">19.99 $</h5>
                        </div>
                        <div class="modificar-cantidad d-inline-block ">
                            <button type="button" class="restar-cantidad btn-circular d-inline-block border-0"><i class="fas fa-minus"></i></button>
                            <p class=" cantidad-producto d-inline-block">1</p>
                            <button type="button" class="sumar-cantidad btn-circular d-inline-block  border-0"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="button" class="btn-danger border-0 btn-elimina-producto"><i class="fas fa-trash"></i></button>
                    </div>


                    <div class="row item-carrito border rounded">
                        <div class="container-imagen d-inline-block">
                            <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                        </div>
                        <div class="info-item-carrito d-inline-block ">
                            <h5><a href="#">Camiseta Rubik</a></h6>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h6>
                                    <br>
                                    <h6 class="d-inline-block">Talla: </h6>
                                    <select name="" id="tallas-disponibles">
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">X</option>
                                    </select>
                                    <br>
                                    <h5 class="d-inline-block">19.99 $</h5>
                        </div>
                        <div class="modificar-cantidad d-inline-block ">
                            <button type="button" class="restar-cantidad btn-circular d-inline-block border-0"><i class="fas fa-minus"></i></button>
                            <p class=" cantidad-producto d-inline-block">1</p>
                            <button type="button" class="sumar-cantidad btn-circular d-inline-block  border-0"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="button" class="btn-danger border-0 btn-elimina-producto"><i class="fas fa-trash"></i></button>
                    </div>

                    <div class="row item-carrito border rounded">
                        <div class="container-imagen d-inline-block">
                            <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                        </div>
                        <div class="info-item-carrito d-inline-block ">
                            <h5><a href="#">Camiseta Rubik</a></h6>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h6>
                                    <br>
                                    <h6 class="d-inline-block">Talla: </h6>
                                    <select name="" id="tallas-disponibles">
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">X</option>
                                    </select>
                                    <br>
                                    <h5 class="d-inline-block">19.99 $</h5>
                        </div>
                        <div class="modificar-cantidad d-inline-block ">
                            <button type="button" class="restar-cantidad btn-circular d-inline-block border-0"><i class="fas fa-minus"></i></button>
                            <p class=" cantidad-producto d-inline-block">1</p>
                            <button type="button" class="sumar-cantidad btn-circular d-inline-block  border-0"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="button" class="btn-danger border-0 btn-elimina-producto"><i class="fas fa-trash"></i></button>
                    </div>
                    <!-- Copias -->

                </div>

            </div>

            <!-- EESUMEN DEL PEDIDO-->
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5 border-0">
                <div id="container-resumen-carrito" class=" border rounded ">
                    <h4>Resumen del pedido</h4>
                    <div class="mt-3 position-relative">
                        <p class="texto-resumen-pedido">Subtotal</p>
                        <p class="valor-resumen" id="subtotal-resumen-pedido"><b>49,99</b></p>
                    </div>
                    <div class="position-relative">
                        <p class="texto-resumen-pedido">Envio</p>
                        <p class="valor-resumen" id="envio-resumen-pedido"><b>4,99</b></p>
                    </div>
                    <hr>
                    <div class="position-relative">
                        <p class="texto-resumen-pedido"><b>Total</b></p>
                        <p class="valor-resumen" id="total-resumen-pedido"><b>54,98</b></p>
                    </div>
                    <div class="mt-3 centrar-forzado"><a href="facturacion.php"><button type="button" class="btn btn-danger">Comprar</button></a></div>

                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- </div> -->

    <!-- Incluimos el footer, con esto tambien se incluyen todas las librerias -->
    <?php
    include "footer.php";
    ?>

    <!-- LIBRERIAS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- FIN-->

    <!-- CODIGO JS -->
    <script src="js/carritoInteractividad.js"></script>
    <!-- FIN -->
</body>

</html>