<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/inicio_perfil_asistencia_preguntas.css" rel="stylesheet"> 
  <link href="css/boostrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <!-- Custom styles for this template -->
  <!--<link href="css/simple-sidebar.css" rel="stylesheet">-->

</head>

<body>
<?php
    include "header.php";
    ?>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Modificar Datos </div>
      <div class="list-group list-group-flush">
        <a data-modal-target="modalNombre" class="list-group-item list-group-item-action bg-light">Nombre</a>
        <a data-modal-target="modalNick" class="list-group-item list-group-item-action bg-light">Nick</a>
        <a data-modal-target="modalFecha" class="list-group-item list-group-item-action bg-light">Fecha Nacimiento</a>
        <a data-modal-target="modalCorreo" class="list-group-item list-group-item-action bg-light">Correo</a>
        <a data-modal-target="modalContraseña" class="list-group-item list-group-item-action bg-light">Contraseña</a>
        <a data-modal-target="modalGenero" class="list-group-item list-group-item-action bg-light">Genero</a> 
        
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-danger d-block" id="menu-toggle">Configuracion</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           
            <li class="nav-item dropdown">
                           
             
                <div>
                  <a class="fas fa-trash-alt icon href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   
                    <a data-modal-target="modalEliminar" class="dropdown-item" href="#">Eliminar Cuenta</a>
                  
                  </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div  class='centraTabla'>
     

        <!-- Contenido Pincipal datos Usuario -->
      <div class="container-fluid">
        <h1 class="mt-4">Perfil del Usuario</h1>
        <hr></hr>
        <img src="images/pagina/usuario.jpg"   width="120" height="100" HSPACE="180" VSPACE="10">
        <hr></hr>
        <h6>Nombre </h6>
        <h6>Nick </h6>
        <h6>Fecha de Nacimiento </h6>
        <h6>Correo Electronico</h6>
        <h6>Genero</h6>
      </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->




 
 
 
 
               <!-- Contenidos Modales -->

 <!-- ******************Eliminar************************ -->
 <div class="modal" id="modalEliminar"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Eliminar tu Perfil</h1>
    <p>Lamentamos que quieras eliminar tu cuenta, nos encanto que formaras parte de nuestra pagina y las  contribuciones que hiciste con nosotros.</p>
    <p>Para eliminar tu cuenta introduce tu contraseña :</p>
    <div class="input-contenedor">
      <i class="fas fa-key icon"></i>
      <input  type="password" placeholder="Contraseña">
       </div>
     
          <input type="button"  value="Confirmar" class="button" > 
</div>
</div>

<!-- ******************CAMBIAR NOMBRE************************ -->
<div class="modal" id="modalNombre"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Nombre</h1>
    <p>Los cambios se veran reflejados en su perfil de usuario</p>
  <b><p>Ingrese el nuevo nombre :</p></b>
    <div class="input-contenedor">
      <i class="fas fa-user icon"></i>
      <input type="text" placeholder="Nombre Completo">
      
      </div>
      
            <input type="button"  value="Confirmar" class="button" >         
  </div>
</div>

<!-- ******************CAMBIAR NICK************************ -->
<div class="modal" id="modalNick"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Nick</h1>
    <p>Los cambios se veran reflejados en su perfil de usuario</p>
  <b><p>Ingrese su nuevo nick :</p></b>
  <div class="input-contenedor">
    <i class="fas fa-smile icon"></i>
    <input type="text" placeholder="Nick ">
         
    </div>
      
            <input type="button"  value="Confirmar" class="button" > 
          
  </div>
</div>

<!-- ******************CAMBIAR FECHA************************ -->
<div class="modal" id="modalFecha"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Fecha de Nacimiento</h1>
    <p>Los cambios se veran reflejados en su perfil de usuario</p>
  <b><p>Ingrese su fecha de nacimiento :</p></b>
  
   
  <div class='centraTabla'>
      <input id="date" type="date">
  </div>
  <p></p>
      
      
 
        <input type="button"  value="Confirmar" class="button" > 
     
  </div>
</div>

<!-- ******************CAMBIAR CORREO************************ -->
<div class="modal" id="modalCorreo"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Correo Electronico</h1>
    <p>Los cambios se veran reflejados en su perfil de usuario</p>
  <b><p>Ingrese su nuevo correo :</p></b>
    <div class="input-contenedor">
      <i class="fas fa-envelope icon"></i>
      <input type="text" placeholder="Correo Electronico">
      
      </div>
      <p>Al cambiar tu correo electronico te llegara un mensaje de autentificacion al nuevo correo, ademas todas las facturas generadas despues del cambio se reenviaran a este</p>
      
            <input type="button"  value="Confirmar" class="button" > 
       
  </div>
</div>
<!-- ******************CAMBIAR CONTRASEÑA************************ -->
<div class="modal" id="modalContraseña"  >
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h1>Contraseña</h1>
    <p>Los cambios se veran reflejados en su perfil de usuario</p>
    <p>Se finalizara session en todos los dispositivos excepto en el que se esta realizando la modificacion :</p>
  <b><p>Ingrese su nueva contraseña :</p></b>
    <div class="input-contenedor">
      <i class="fas fa-key icon"></i>
      <input  type="password" placeholder="Contraseña nueva">
       </div>
  <p>Utiliza 8 caracteres como minimo, no utilizes una contraseña de otro sitio o un termino que sea demasiado facil :</p>
  <b><p>Confirme su contraseña</p> </b>
  <div class="input-contenedor">
      <i class="fas fa-lock icon"></i>
      <input  type="password" placeholder="Confirmacion Contraseña">
       </div>
       
            <input type="button"  value="Confirmar" class="button" > 
          
  </div>
</div>
<!-- ******************CAMBIAR GENERO************************ -->
  <div class="modal" id="modalGenero"  >
    <div class="modal-content">
      <span class="modal-close">&times;</span>
      <h1>Genero</h1>
      <p>Los cambios se veran reflejados en su perfil de usuario</p>
    <b><p>Seleccione una opcion :</p></b>

    <select class="select-css" name="comboSeleccionarGenero">                  
      <option value="1" selected>Masculino</option>
      <option value="2" >Femenino</option> 
      <option value="3">Prefiero no Especificar </option>
    
    </select>
         
         
              <input type="button"  value="Confirmar" class="button" > 
           
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/modal.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<?php
    include "footer.php";
    ?>
</body>

</html>
