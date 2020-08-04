<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
    <link rel="stylesheet" href="css/estilo_carrito_pago_compras.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Incluimos el header,  -->
    <?php
    include "header.php";
    ?>

    <div>
        <h2 class="m-3">Facturacion</h2>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-7 col-lg-7 fac-container-izquierdo">
                <form>
                    <div class="form-group">
                        <div class="form-group">
                            <!-- Full Name -->
                            <label for="full_name_id" class="control-label">Nombre completo</label>
                            <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Ricardo Jarro" requiered>
                        </div>

                    </div>
                    <div class="form-group">
                        <!-- Street 1 -->
                        <label for="street1_id" class="control-label">Direccion</label>
                        <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Ramayana y Telemaco" requiered>
                    </div>

                    <div class="form-group">
                        <!-- Street 2 -->
                        <label for="street2_id" class="control-label">Detalle secundario</label>
                        <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Condominio Valle de los Rios, casa 2" requiered>
                    </div>

                    <div class="form-group">
                        <!-- City-->
                        <label for="city_id" class="control-label">Ciudad</label>
                        <input type="text" class="form-control" id="city_id" name="city" placeholder="Cuenca" requiered>
                    </div>

                    <div class="form-group">
                        <!-- State Button -->
                        <label for="state_id" class="control-label">Provincia</label>
                        <select class="form-control" id="state_id">
                            <option value="01">Azuay</option>
                            <option value="02">Bolivar</option>
                            <option value="03">Cañar</option>
                            <option value="04">Carchi</option>
                            <option value="05">Cotopaxi</option>
                            <option value="06">Chimborazo</option>
                            <option value="07">El Oro</option>
                            <option value="08">Esmeraldas</option>
                            <option value="09">Guayas</option>
                            <option value="10">Imbabura</option>
                            <option value="11">Loja</option>
                            <option value="12">Los Rios</option>
                            <option value="13">Manabi</option>
                            <option value="14">Monora Santiago</option>
                            <option value="15">Napo</option>
                            <option value="16">Pastaza</option>
                            <option value="17">Pichincha</option>
                            <option value="18">Tungurahua</option>
                            <option value="19">Zamora Chinchipe</option>
                            <option value="20">Galapagos</option>
                            <option value="21">Sucumbios</option>
                            <option value="22">Orellana</option>
                            <option value="23">Santo Domingo de los Tschilas</option>
                            <option value="24">Santa Elena</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <!-- Zip Code-->
                        <label for="zip_id" class="control-label" requiered>Zip Code</label>
                        <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####" requiered>
                    </div>

                    <div class="form-group center">
                        <!-- Submit Button -->
                        <a href="pago.php" class="btn btn-danger">Confirmar compra</a>
                        <!-- <a href="pago.php"><button class="btn btn-danger">Confirmar compra</button></a> -->
                    </div>
                </form>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5 border rounded" id="fact-container-derecho">

                <div class="mt-3 position-relative">
                    <p class="texto-resumen-pedido d-inline-block ">Subtotal</p>
                    <p class="valor-resumen d-inline-block" id="subtotal-resumen-pedido "><b>49,99</b></p>
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
                <hr>
                <div>
                    <p><b>Productos en la cesta</b></p>
                </div>

                <div id="fact-items-compra">
                    <div>
                        <div class="row item-carrito border rounded">
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-item-carrito d-inline-block ">
                                <h5><a href="producto.php">Camiseta Rubik</a></h5>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h7>
                                <br>
                                <h6 class="d-inline-block">Talla: </h6>
                                <select name="" id="tallas-disponibles">
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">X</option>
                                </select>
                                <br>
                                <div class="item-cantidad">
                                    <h6 class="d-inline">Cantidad:</h6>
                                    <p class="d-inline">2</p>
                                </div>
                            </div>
                            <div class="price_now-price">
                                <h5>19.99$</h5>
                            </div>
                        </div>

                        <div class="row item-carrito border rounded">
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-item-carrito d-inline-block ">
                                <h5><a href="producto.php">Camiseta Rubik</a></h5>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h7>
                                <br>
                                <h6 class="d-inline-block">Talla: </h6>
                                <select name="" id="tallas-disponibles">
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">X</option>
                                </select>
                                <br>
                                <div class="item-cantidad">
                                    <h6 class="d-inline">Cantidad:</h6>
                                    <p class="d-inline">2</p>
                                </div>
                            </div>
                            <div class="price_now-price">
                                <h5>19.99$</h5>
                            </div>
                        </div>


                        <div class="row item-carrito border rounded">
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-item-carrito d-inline-block ">
                                <h5><a href="producto.php">Camiseta Rubik</a></h5>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h7>
                                <br>
                                <h6 class="d-inline-block">Talla: </h6>
                                <select name="" id="tallas-disponibles">
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">X</option>
                                </select>
                                <br>
                                <div class="item-cantidad">
                                    <h6 class="d-inline">Cantidad:</h6>
                                    <p class="d-inline">2</p>
                                </div>
                            </div>
                            <div class="price_now-price">
                                <h5>19.99$</h5>
                            </div>
                        </div>


                        <div class="row item-carrito border rounded">
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-item-carrito d-inline-block ">
                                <h5><a href="producto.php">Camiseta Rubik</a></h5>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h7>
                                <br>
                                <h6 class="d-inline-block">Talla: </h6>
                                <select name="" id="tallas-disponibles">
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">X</option>
                                </select>
                                <br>
                                <div class="item-cantidad">
                                    <h6 class="d-inline">Cantidad:</h6>
                                    <p class="d-inline">2</p>
                                </div>
                            </div>
                            <div class="price_now-price">
                                <h5>19.99$</h5>
                            </div>
                        </div>


                        <div class="row item-carrito border rounded">
                            <div class="container-imagen d-inline-block">
                                <img src="images/camisa-rubik_1_negro.jpg" class="h-100">
                            </div>
                            <div class="info-item-carrito d-inline-block ">
                                <h5><a href="producto.php">Camiseta Rubik</a></h5>
                                <h6 class="d-inline">Color: </h6>
                                <h7 class="d-inline">negro</h7>
                                <br>
                                <h6 class="d-inline-block">Talla: </h6>
                                <select name="" id="tallas-disponibles">
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">X</option>
                                </select>
                                <br>
                                <div class="item-cantidad">
                                    <h6 class="d-inline">Cantidad:</h6>
                                    <p class="d-inline">2</p>
                                </div>
                            </div>
                            <div class="price_now-price">
                                <h5>19.99$</h5>
                            </div>
                        </div>


                    </div>




                </div>
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