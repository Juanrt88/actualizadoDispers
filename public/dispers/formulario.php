<html>
    <head>
        <title>Proyecto con bootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/inicio_perfil_asistencia_preguntas.css">
        
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<!-- <link type="text/css" rel="stylesheet" href="css/style.css"/> -->

    
        
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
                <form class="form-horizontal" method="post">
                    <fieldset>
						<legend class="text-center header"><h1>Formulario</h1></legend>
						<p class="col-12 text-center">Bienvenido al registo de datos, recuerda completar todos los campos</p>
								<p class="col-12 text-center text-danger small">*Todos los campos son obligatorios</p>
                        
                                

                                <div>    
                                    <select class="select-css" name="comboAsunto">                  
                                        <option value="1" selected>Asunto</option>
                                        <option value="2" >Asunto1</option> 
                                        <option value="3">Asunto2 </option>
                                        <option value="3">Asunto3 </option>
                                        <option value="3">Asunto4 </option>
                                      </select>
             
                    </div>
						<div class="form-group">
                            <div class="col-md-7">
								<span class="col-md-0 offset-md-5">Nombre: </span>
                                <input id="nbame" name="name" type="texto" placeholder="Ingrese su nombre" class="form-control offset-md-5"  required>
                            </div>
                        </div>
                    
						
						<div class="form-group">
                            <div class="col-md-7">
								<span class="col-md-0 offset-md-5">Numero de Pedido: </span>
                                <input id="npedido" name="numero_pedido" type="texto" placeholder="Ingrese el numero de pedido" class="form-control offset-md-5"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-7">
								<span class="col-md-0 offset-md-5">Correo electrónico: </i></span>
                                <input id="correo" name="correo" type="email" placeholder="Ingrese su correo" class="form-control offset-md-5"  required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-7">
								
                                <input type="file" id="narchivo" name="archivo" type="email" placeholder="Archivo adjunto" class="form-control offset-md-5"  required>
                            </div>
                        </div>

        </div>
                          

                            <p></p>

                           
<p> <textarea name="textarea" rows="10" cols="50">Mensaje

</textarea></p>

 
  
</div> 
    
    
    <p></p>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger btn-lg">Enviar</button>
                            </div>
						</div>
						<div class="col-md-12 ">   
                        	<p class="text-center">
							Un asistente te respondera lo mas pronto posible  gracias por visitar nuestra pagina,
                            </p>
                        </div>
                    
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    
        <!-- LIBRERIAS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>
    <!-- FIN-->
		
	<?php
    include "footer.php";
    ?>
    </body>
</html>