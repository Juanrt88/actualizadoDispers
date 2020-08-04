@extends('admin.system.admin')
@section('titulo','Acerca de')
@section('breadcrumb')
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection
@section('contenido')
<div class="card">
    <div id="v2_acercade" th:fragment="v2_acercade">
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <a href="https://www.ucuenca.edu.ec/"><img class="img-fluid rounded-circle mb-3" src="http://dispers.test/adminlte/dist/img/universidad.png"></a>   
                        <legend class="text-center header"><h5></h5></legend>
                        <legend class="text-center header"><h3>Integrantes:</h3></legend>
                        <legend class="text-center header"><h5>Jarro Pineda Angel Ricardo</h5></legend>
                        <p class="col-12 text-center ">ricardo.jarro98@ucuenca.edu.ec</p>
                        <legend class="text-center header"><h5>Lazo Lozado Juan Carlos</h5></legend>
                        <p class="col-12 text-center ">juanc.lazol@ucuenca.edu.ec </p>
                        <legend class="text-center header"><h5>Orellana Salinas Juan Diego</h5></legend>
                        <p class="col-12 text-center ">diego.orellana@ucuenca.edu.ez</p>
                        <br></br>
                        <legend class="text-center header"><h3>Docente:</h3></legend>
                        <legend class="text-center header"><h5>Ing. Priscila Cedillo</h5></legend>
                        <br></br>
                        <br></br>
                        <p class="col-12 text-center">Esta aplicación de tienda online fue desarrollada como parte de la materia Programación Web, periodo marzo-julio 2020 </p></legend>                        
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>    
</div>  

@endsection