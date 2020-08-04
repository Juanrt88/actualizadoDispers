
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/estilospdfhorizontal.css') }}">
<title>TABLA DE PRODUCTOS</title>
<body>
<header>
    <br>
    <p><strong>LIBRERIA DOMPDF - LARAVEL 7</strong></p>
</header>
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 550px;">
                  <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Slug</th>
                  <th>Descripción</th>
                  <th>Fecha creación</th>
                  <th>Fecha modificación</th>
                  <th colspan="3"></th>
                </tr>
              </thead>
              <tbody>
  
                  @foreach ($categorias as $categoria)
                 
                      <tr>
                          <td> {{$categoria->id }} </td>
                          <td> {{$categoria->nombre }} </td>
                          <td> {{$categoria->slug }} </td>
                          <td> {{$categoria->descripcion }} </td>
                          <td> {{$categoria->created_at }} </td>
                          <td> {{$categoria->updated_at }} </td>
                          
                      </tr>
                  @endforeach
              </tbody>
            </table>
       
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    <!-- /.row -->
   
    <footer>
        <p><strong>SUSCRIBETE - COMENTA - COMPARTE</strong></p>
    </footer>
   
    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 820, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script>
</body>