<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link rel="stylesheet" href="css/inicio_perfil_asistencia_preguntas.css">
	

</head>  
<body>
 <!-- Incluimos el header, con esto tambien se incluyen todas las librerias -->
 <?php
    include "header.php";
    ?>

    <form class="formulario">
    
    <h2>Inicio de sesión</h2>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico">
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="Contraseña">
        </div>
        
        <p>
        <input type="checkbox" id="check1" >
        <label for="check1">Recordar</label >
        </p>

         <input type="button" value="Iniciar" class="button btn btn-danger">
         <p><a href="">Olvido su contraseña</a></p>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registrar_usuarios.php">Registrate </a></p>
     </div>

    <hr></hr>


    <h5>Inicia sesión con tu cuenta de : </h5>

        <div class="button-facebook" >
            <i class="fab fa-facebook"></i>
            <input disabled=»disabled» type="button-fb" value="Facebook" class="button1"  >
            </div>
            <br>

            <div class="button-google btn-danger">
                <i class="fab fa-google btn-danger"></i>
                <input disabled=»disabled» type="button-g" value="Google" class="button1 btn-danger" >
                </div>
</div>

</form >
<p></p>
<p></p>
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