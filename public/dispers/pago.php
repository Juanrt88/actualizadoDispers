<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="credit-card-div">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Ingrese el numero de la tarjeta" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font"> Mes de Expiracion</span>
                                        <input type="text" class="form-control" placeholder="MM" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font"> Año de Expiracion</span>
                                        <input type="text" class="form-control" placeholder="YY" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font"> CCV</span>
                                        <input type="text" class="form-control" placeholder="CCV" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img src="images/tarjeta_credito.jpg" class="img-rounded" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pad-adjust">

                                        <input type="text" class="form-control" placeholder="Nombre del titular" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pad-adjust">
                                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox" checked class="text-muted"> Save details for fast payments <a href="#"> learn how ?</a>
                            </label>
                        </div> -->
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                        <input type="submit" class="btn btn-danger" value="CANCELAR" />
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                        <input type="submit" class="btn btn-warning btn-block" value="PAGAR AHORA" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
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