
@include('tienda.system.header_estilos_scripts')


    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container position-relative">
                <!-- en este ul  estaba float-left -->
                <ul class="header-links ">
                    <li><a href="#"><i class="fa fa-phone"></i> +593989100245</a>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> dispers.store@gmail.com.com</a>
                    </li>
                    <li><a href="https://www.google.es/maps/place/Universidad+De+Cuenca/@-2.9002615,-79.0120829,17.3z/data=!4m5!3m4!1s0x91cd180d08006233:0x59ff5aaba4301326!8m2!3d-2.9006441!4d-79.0102078"><i class="fa fa-map-marker"></i> ubicacion</a>
                    </li>
                    <li><a href="formulario.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Asistencia</a>
                    </li>
                </ul>
                <ul class="header-links">
                    <div class="btn-group " id="boton-cuenta">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o"></i> Cuenta</button>
                        <div class="dropdown-menu">
                            <a href="perfil.php" class="dropdown-item"> <i class="fa fa-user-o"></i> Perfil de usuario </a>
                            <br> <a href="compras_realizadas.php" class="dropdown-item"> <i class="fa fa-list-ol" aria-hidden="true"></i> Listar compras </a>
                            <br> <a href="#" class="dropdown-item"> <i class="fa fa-times" aria-hidden="true"></i> Cerrar Sesion </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->
        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-lg-3">
                        <div class="header-logo"> <a href="index.html" class="logo">

                                <img src="http://dispers.test/dispers/images/logoDispers.png" alt="" width="220" height="60">

                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
                    <!-- SEARCH BAR -->
                    <div class="col-lg-7 aling-itme-center">
                        <div class="header-search">
                            <form>
                                <input class="input offset-md-2" placeholder="Buscar Producto">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
                    <!-- ACCOUNT -->
                    <div class="col-lg-2 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->

                            <div class="dropdown position-static">
                                <a class="dropdown-toggle mano" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Tu Carrito</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="dropdown-menu ">
                                    <div class="cart-list p-2">
                                        <div class="product-widget ">
                                            <div class="product-img">
                                                <img src="http://dispers.test/dispers/images/articulos del hogar/tazas/taza-negra-saxofon.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">TAZA NEGRA JAZZ</a></h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$20.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="http://dispers.test/dispers/images/camisa-tiburon_1_blanco.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">CAMISETA DADDY SHARK</a></h3>
                                                <h4 class="product-price"><span class="qty">2x</span>$39,98</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart-summary p-2"> <small>3 Articulos seleccionados</small>
                                        <h5>SUBTOTAL: $44.97</h5>
                                    </div>
                                    <div class="cart-btns p-2">
                                        <a href="carrito.php">Ver Carrito</a>
                                        <a href="facturacion.php">Comprar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->
                            <!-- Menu Toogle -->
                            <div class="menu-toggle"> <a href="#">

                                    <i class="fa fa-bars"></i>

                                    <span>Menu</span>

                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
        <!-- /HEADER -->
        <!-- NAVIGATION -->


        <nav class="navbar navbar-expand-lg navbar-light ml-5 mr-5 container-navb">

            <button class="navbar-toggler" role="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item"><a href="index.html" class="nav-link "> Inicio </a></li>

                    <li class="nav-item dropdown"> <a href="catalogo_hombre.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Ropa </a>
                        <div class="dropdown-menu"> <a href="catalogo_hombre.php" class="dropdown-item">Ropa de hombre </a>
                            <br> <a href="http://dispers.test/dispers/catalogo_mujer.php" class="dropdown-item"> Ropa de mujeres </a>
                            <br> <a href="http://dispers.test/dispers/catalogo_ninos.php" class="dropdown-item"> Ropa de niños </a>
                            <br>
                        </div>
                    </li>


                    <li class="nav-item dropdown"> <a href="catalogo_hombre.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Accesorios </a>
                        <div class="dropdown-menu">
                            <a href="http://dispers.test/dispers/catalogo_gorras.php" class="dropdown-item"> Billeteras </a> <br>
                            <a href="http://dispers.test/dispers/catalogo_gorras.php" class="dropdown-item"> Gorras </a> <br>
                            <a href="http://dispers.test/dispers/catalogo_gorras.php" class="dropdown-item"> Varios </a> <br>
                        </div>
                    </li>

                    <li class="nav-item dropdown"> <a href="catalogo_hombre.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Articulos del Hogar </a>
                        <div class="dropdown-menu">
                            <a href="http://dispers.test/dispers/catalogo_articulos_tazas.php" class="dropdown-item"> Tazas </a> <br>
                            <a href="http://dispers.test/dispers/catalogo_articulos_tazas.php" class="dropdown-item"> Mousepad </a> <br>
                            <a href="http://dispers.test/dispers/catalogo_articulos_tazas.php" class="dropdown-item"> Posters </a> <br>
                            <a href="http://dispers.test/dispers/catalogo_articulos_tazas.php" class="dropdown-item"> Varios </a> <br>

                        </div>
                    </li>

                </ul>

            </div>
        </nav>

        <!-- <nav id="navigation">
       
            <div class="container">
           
                <div id="responsive-nav">

                 
                    <ul class="main-nav nav">
                        <li class="nav-item"><a href="Inicio%20-%20DISPERS.html" class="nav-link dropdown-toggle" data-toggle="dropdown"> Inicio </a>
                        </li>
                        <li class="nav-item dropdown"> <a href="catalogo_hombre.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Ropa </a>
                            <div class="dropdown-menu"> <a href="catalogo_hombre.php" class="dropdown-item">Ropa de hombre </a>
                                <br> <a href="http://dispers.test/dispers/catalogo_mujer.php" class="dropdown-item"> Ropa de mujeres </a>
                                <br> <a href="http://dispers.test/dispers/catalogo_ninos.php" class="dropdown-item"> Ropa de niños </a>
                                <br>
                            </div>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Mujer">Accesorios</a>
                            <div class="dropdown-menu"> <a href="#" class="dropdown-item"> Billeteras </a>
                                <br> <a href="#" class="dropdown-item"> Gorras </a>
                                <br>
                            </div>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="nino">Articulos del hogar</a>
                            <div class="dropdown-menu"> <a href="#" class="dropdown-item"> Tazas </a>
                                <br> <a href="#" class="dropdown-item"> Posters </a>
                                <br> <a href="#" class="dropdown-item"> Padmouse </a>
                                <br>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </nav> -->
      
    </header>

    
  
 