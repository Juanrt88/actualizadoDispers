<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo')
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token()}}">
      <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href={!! asset('adminlte/plugins/fontawesome-free/css/all.min.css') !!}>
     <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={!! asset('adminlte/dist/css/adminlte.min.css') !!}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('estilos')  
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  
</head>
<body class="hold-transition sidebar-mini">

<!-- Barra principal inicio -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="{{ route('admin')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Formulario busqueda -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Barras de navegacion en ventana superior izquierda -->
    <ul class="navbar-nav ml-auto">
      <!-- Menu notificaciones -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 mensajes nuevos
            <span class="float-right text-muted text-sm">3 min</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 reportes nuevos
            <span class="float-right text-muted text-sm">2 dias</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Contenedor Principal -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="{{ route('admin')}}" class="brand-link">

      {{-- <img src="{{URL::asset('/images/admin/AdminLTELogo.png')}}" 
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light" style="margin-right: 10px;margin-left: 10px;"> <strong>Administración</strong></span>
      <i class="fas fa-wrench"></i>
    </a>

    <!-- Sidebar Usuario Administrador  -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class=" img-circle elevation-2" style="background-color: #ffffff;" >
          <img  src="{{URL::asset('/images/admin/admin.png')}}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario ID</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">Administración</li>
          <!-- Categorías -->
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Categorías
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.category.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-info"></i>
                      <p>Lista de Categorías</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.category.create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Crear categoría</p>
                    </a>
                  </li>
                 
                </ul>
              </li>


              <!-- Productos -->
              <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fab fa-product-hunt"></i>
                 <p>
                   Productos
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('admin.product.index')}}" class="nav-link">
                     <i class="far fa-circle nav-icon text-info"></i>
                     <p>Lista de Productos</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('admin.product.create')}}" class="nav-link">
                     <i class="far fa-circle nav-icon text-danger"></i>
                     <p>Crear Producto</p>
                   </a>
                 </li>
                
               </ul>
             </li>









             <!-- Mashups -->
             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-asymmetrik"></i>
                <p>
                  Mashups
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.mashupgooglemaps.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Google Maps</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.mashupgooglechart.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Google Charts</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.mashuptwitter.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Twiter</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.mashupfacebook.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Facebook</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.mashupinstagram.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Instagram</p>
                  </a>
                </li>
                </ul>
                










             <!-- Pedidos -->
             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-swatchbook"></i>
                <p>
                  Pedidos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.category.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de Pedidos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.category.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modificar Pedido</p>
                  </a>
                </li>
               
              </ul>
            </li>

            <!-- Usuarios -->
             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.user.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Lista de Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.user.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Agregar Admin</p>
                  </a>
                </li>
               
              </ul>
            </li>

            <li class="nav-item">
              <a href="../gallery.html" class="nav-link">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  Asistencias
                </p>
              </a>
            </li>
     
     
          <li class="nav-header">Información</li>
      
          <li class="nav-item">
            <a href="http://dispers.test/admin/acerca_de" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Acerca de
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://docs.google.com/document/d/1KHeDQhVeay7bIsA3Y5Jms3Aj8C__uDDzRjadg_-iOPc/edit?usp=sharing" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Manual
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('titulo')
            </title></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
              
              @yield('breadcrumb')
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">



      @if( session('datos') )
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('datos') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if( session('cancelar') )
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('cancelar') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif


      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>

            @endforeach

          </ul>
        </div> 
      @endif





  @yield('contenido')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="">Dispers</a>.</strong> Universidad de Cuenca.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('js/app_admin.js') }}" defer></script>

<!-- jQuery -->
<script src="{{ URL::asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('adminlte/dist/js/demo.js')}}"></script>
@yield('scripts')
</body>
</html>