<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="css/estilo_carrito_pago_compras.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="section">

        <div class="container">

            <div class="display-4">Pedidos</div>
            <hr>
            <div id="container-compras" class="no-seleccionable">

                <!-- plantilla -->

                <div class="compra-unitaria border m-2 rounded p-2 mano position-relative" id="item-pedido-unitario">
                    <a href="detalle_compra.php">
                        <div>
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-compra">
                                <h2 class="display-5 cod-compra ">Pedido #09304953</h2>
                                <div>
                                    <div>
                                        <p class="d-inline">Cantidad de productos: </p>

                                        <p class="cantidad-productos d-inline">2</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Estado: </p>
                                        <p class="estado-pedido  d-inline">Entregado</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Fecha: </p>
                                        <p class="fecha-pedido  d-inline">12-10-2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="precio-pagado">
                                <p class="d-inline"><b>Total</b></p>
                                <br>
                                <p class="d-inline">39,98 $</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- plantilla -->
                <!-- Ejemplos -->
                <div class="compra-unitaria border rounded m-2 p-2 mano position-relative">
                    <a href="detalle_compra.php">
                        <div>
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-compra">
                                <h2 class="display-5 cod-compra">Pedido #09304543</h2>
                                <div>
                                    <div>
                                        <p class="d-inline">Cantidad de productos: </p>
                                        <p class="cantidad-productos d-inline">2</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Estado: </p>
                                        <p class="estado-pedido  d-inline">Enviado</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Fecha: </p>
                                        <p class="fecha-pedido  d-inline">9-02-2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="precio-pagado">
                                <p class="d-inline"><b>Total</b></p>
                                <br>
                                <p class="d-inline">39,98 $</p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="compra-unitaria border rounded m-2 p-2 position-relative">
                    <a href="detalle_compra.php">
                        <div>
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-compra">
                                <h2 class="display-5 cod-compra ">Pedido #09304953</h2>
                                <div>
                                    <div>
                                        <p class="d-inline">Cantidad de productos: </p>
                                        <p class="cantidad-productos d-inline">2</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Estado: </p>
                                        <p class="estado-pedido  d-inline">Entregado</p>
                                    </div>
                                    <div>
                                        <p class="d-inline">Fecha: </p>
                                        <p class="fecha-pedido  d-inline">12-12-2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="precio-pagado">
                                <p class="d-inline"><b>Total</b></p>
                                <br>
                                <p class="d-inline">39,98 $</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Ejemplos -->

            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

    <!-- LIBRERIAS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>
    <!-- FIN-->
</body>

</html>