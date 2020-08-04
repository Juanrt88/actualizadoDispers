@extends('admin.system.admin')
@section('titulo','Graficas de la tienda')
@section('breadcrumb')
  <li class="breadcrumb-item active">Mashup de Google Charts</li>
@endsection
@section('contenido')









   
  <div class="col-lg-6 col-6 offset-md-3" >
    <div id="chart_wrap">
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
        <div id="piechart_3d" style="width: 500px; height: 300px;"></div>
      </div>
  </div>
  
  
  <br></br>
  <div class="col-lg-6 col-6 offset-md-3">
    <div id="chart_wrap">
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