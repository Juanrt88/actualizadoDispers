<!DOCTYPE html>
<html>
@extends('admin.system.admin')
@section('titulo','Ubicación de la tienda')
@section('breadcrumb')
  <li class="breadcrumb-item active">Mashup de Google Maps</li>
@endsection
@section('contenido')
<head>
	<title>Maps</title>
	<link rel="stylesheet" href="http://dispers.test/adminlte/mashups/googlemaps/estilo.css">
</head>
<body>
	<div id="map"></div>
	<script src="http://dispers.test/adminlte/mashups/googlemaps/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

</body>
@endsection

</html>