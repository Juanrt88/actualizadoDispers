<html>
    <head>
        <title>Proyecto con bootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    
        
        <style type="text/css">
            .borde{
                background-color: gray;
                text-align: center;
            }
        </style>


    </head>
    <body> 
		
		 <!-- Incluimos el header, con esto tambien se incluyen todas las librerias -->
		 <?php
		 include "header.php";
		 ?>	
	
		
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="col-12"> 
                    <legend class="text-center header"><h1>Preguntas Frecuentes</h1></legend>
						<p class="col-12 text-center">En esta seccion se puede consultar todas las preguntas frecuentes que tienen sobre nuestra tienda</p>
						
						<div class="form-group">
							<div class="col-md-12 ">
                                <p class="col-md-12 "><h2 class="text-center"><b>Pagos y precios </b></h2></p>
                            	<p class="col-md-12 "><b>Formas de Pago disponibles: </b></p>
                                <p class="col-md-12 "><u>Tarjetas de crédito:</u> el cargo en cuenta de tu tarjeta de crédito es efectuado de manera automática por nuestra entidad financiera. Después de verificar tus datos, se podrá inmediatamente iniciar el procesamiento de tu pedido.</p>
                                <p class="col-md-12"><u>PayPal:</u> Con el servicio gratuito de pago por Internet PayPal puedes efectuar tus pagos de manera rápida y simple. Lo único que tienes que hacer es registrarte en PayPal e ingresar tus datos bancarios para luego poder hacer tus compras en Internet con tan solo unos cuantos clics. Tus datos bancarios o de tarjeta de crédito no nos serán transmitidos. Si pagas con PayPal podemos comenzar con el procesamiento de tu pedido de manera inmediata.</p>
                                <p class="col-md-12"><u>Impuestos</u> Los precios de los productos que se encuentran a la venta en nuestras tiendas de comercio electrónico incluyen el Impuesto de Valor Añadido (I.V.A.).</p>
                            </div>

                            <div class="col-md-12 ">
                            <p class="col-md-12 "><h2 class="text-center"><b>Entrega y envio </b></h2></p>
                            	<p class="col-md-12 "><b>Plazo de entrega </b></p>
                                <p class="col-md-12 ">Todas tus compras en Dispers seran enviadas por medio del servio de entrega en Ecuador Servientrega. Como trabajamos con el mejor operador logístico, que tiene la mayor red de transporte y una gran experiencia en logística de distribución dentro del pais, por lo que te podemos ofrecer una gran seguridad de que tu envío llegará con éxito. Tu pedido puede tardar entre 1-2 dias en llegar o puedes recoger tú mismo el pedido en las respectivas oficinas.</p>
                                <p class="col-md-12 "><b>Direccion de envio </b></p>
                                <p class="col-md-12">Actualmente enviamos tus pedidos a cualquier localidad de Ecuador. De momento no es posible recoger los pedidos en nuestras tiendas físicas.</p>
                            </div>

                            <div class="col-md-12 ">
                            <p class="col-md-12 "><h2 class="text-center"><b>Pedido </b></h2></p>
                            	<p class="col-md-12 "><b>Cambios y reembolso </b></p>
                                <p class="col-md-12 "><u>Cambios:</u> Cambia la mercancía dentro de los 10 días siguientes a la fecha del pedido, es igual si es porque el artículo no te queda bien, no te gusta o si por cualquier otro motivo no cumple con tus expectativas.</p>
                                <p class="col-md-12 "><u>Reembolso:</u> Se realizara el reembolso respectivo en caso de devolucion de un producto con el que no se esta satisfecho como tambien de ser el caso de no haber recibido el pedido.</p>
                                <p class="col-md-12 "><b>Cancelar Pedido </b></p>
                                <p class="col-md-12">Sí quieres cancelar tu pedido ponte en contacto con nosotros a través de una solicitud de asistencia indicándonos tus datos y los datos del pedido. Ten en cuenta que el período de desestimación es de 15 días hábiles y que los productos deberían estar con su embalaje original.</p>
                                <p class="col-md-12 "><b>Pedido Incorrecto </b></p>
                                <p class="col-md-12">Si por error recibes un artículo diferente al que habías pedido ponte en contacto con nuestro departamento de atención al cliente.</p>
                            </div>
						</div>
						
                       
                </div>
						
              
            </div>
        </div>
    </div>
</div>
    
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	<?php
    include "footer.php";
    ?>
    </body>
</html>