@extends('admin.system.admin')
@section('titulo','Sistema Para Administradores')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href={!! asset('adminlte/dist/css/chart.css') !!}>

@section('contenido')

<div class="container-fluid">
  
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>20</h3>

          <p>Nuevas Ordenes</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>5<sup style="font-size: 20px"></sup></h3>

          <p>Asitencias</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$countc}}</h3>

          <p>Usuarios Registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Mas Información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$countp}}</h3>

          <p>Productos Registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

</div><!-- /.container-fluid -->


  
   
<div class="col-lg-6 col-6 offset-md-3">
  
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Seccion', 'Registros'],
            ['Categorias', {{$countc}}],
            ['Productos',      {{$countp}}],
            ['Usuarios',  {{$countu}}],
  
          ]);
  
          var options = {
            title: 'Datos Registrados',
            is3D: true,
     
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
          chart.draw(data, options);
        }
      </script>
      <div id="piechart_3d" style="width: 550px; height: 300px;"></div>
   
</div>

<br></br>

<div class="col-lg-6 col-6 offset-md-3">
 
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
      // Some raw data (not necessarily accurate)
      var data = google.visualization.arrayToDataTable([
        ['Month', 'Bolivia', 'Ecuador',  'Papua New Guinea', 'Rwanda', 'Average'],
        ['2004/05',  165,      938,              998,           450,      614.6],
        ['2005/06',  135,      1120,             1268,          288,      682],
        ['2006/07',  157,      1167,             807,           397,      623],
        ['2007/08',  139,      1110,             968,           215,      609.4],
        ['2008/09',  136,      691,              1026,          366,      569.6]
      ]);

      var options = {

        title : 'Alguna Mamada',
        vAxis: {title: 'Cups'},
        hAxis: {title: 'Month'},
        seriesType: 'bars',
        series: {5: {type: 'line'}}        };

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
  <div id="chart_div" style="width: 500px; height: 300px;"></div>

</div>






    

















@endsection