@extends('admin.system.admin')

@section('titulo', 'Ver Producto')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Productos</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('estilos')
  <!-- Select2 -->
  <link href=" {!! asset('adminlte/plugins/select2/css/select2.min.css') !!}" rel="stylesheet">
  <link href=" {!! asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}" rel="stylesheet">
 <!-- Ekko Lightbox -->
 <link href=" {!! asset('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') !!}" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<style>
.select2-selection {
    height: 38px !important;
}
</style>
@endsection

@section('scripts')
  
 <!-- Select2 -->
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
window.data={
    editar:'si',
    datos:{
        "nombre":"{{$producto->nombre}}",
        "precio":"{{$producto->precio}}",
        "peso":"{{$producto->peso}}",      
    }    
}

  $(function () {
    //Initialize Select2 Elements
    $('#category_id').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  });

  //ligthbox
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
</script> 



@endsection


@section('contenido')

 
<div id="apiproduct">


    <form action="{{ route('admin.product.update',$producto->id) }}" method="POST" enctype="multipart/form-data" >
@csrf
@method('PUT')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->


        <!-- /.card -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos del producto</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label>Nombre</label>
                  <input 

                   v-model="nombre"     
                   @blur="getProduct" 
                   @focus = "div_aparecer= false"
                  
                  class="form-control" type="text" id="nombre" name="nombre" readonly>

                  <label>Slug</label>
                  <input 
                  readonly 
                  v-model="generarSLug"  
                  
                  class="form-control" type="text" id="slug" name="slug" >

                  <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                    @{{ div_mensajeslug }}
                 </div>
                 <br v-if="div_aparecer">
                 

                    <label>Precio</label>
                     <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input v-model="precio" 
                class="form-control" type="number" id="precio" name="precio" min="0" value={{$producto->precio}} step=".01" readonly>                 
                  </div>                
                  
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group " >
                  <label>Categoria</label>
                  <select name="category_id" id="category_id" class="form-control " style="width: 100%;" disabled>
                    @foreach($categorias as $categoria)
                    
                     @if ($categoria->id==$producto->category_id)
                        <option value="{{ $categoria->id }}" selected="selected">{{ $categoria->nombre }}</option>
                     @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                     @endif
                    @endforeach


                  </select>
                  <label>Cantidad</label>
                <input class="form-control" type="number" id="stock" name="stock" value="{{$producto->stock}}" readonly>
                </div>
                <!-- /.form-group -->
    
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


          </div>
          <!-- /.card-body -->
          <div class="card-footer">
           
        </div>
      </div>


   <div class="row">
          <div class="col-md-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detalles del producto</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="row">
                <div class="form-group col-md-8">
                  <label>Descripción </label>

                <textarea class="form-control ckeditor" name="descripcion" id="descripcion" rows="5" readonly>{{$producto->descripcion}}</textarea>          
                </div>
                <div class="form-group col-md-4">
                    <label>Peso:</label>
  
                    <div class="input-group">                        
                        <input v-model="peso" 
                        class="form-control" type="number" id="peso" name="peso" min="0" value="{{$producto->peso}}" step=".01" readonly>                 
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kg</span>
                          </div>
                      </div> 
                    <br>
                    <div class="form-group">
                      <label>Estado</label>
                     
                  <select name="estado" id="estado" class="form-control " style="width: 100%;" disabled>

                    @foreach($estados_productos as $estado)                    
                     @if ($estado==$producto->estado)
                        <option selected value="{{$estado}}">{{$estado}}</option>
                     @else
                        <option value="{{$estado}}">{{$estado}}</option>
                     @endif
                    @endforeach
                  </select>


                      </div>                
                  </div>
            </div>
                <!-- /.form group -->

                               

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       </div>
        
      </div>
      

        <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">
                Galeria de imagenes
              </div>
            </div>
            <div class="card-body">
              <div class="row">

                @foreach ($producto->images as $image)
                <div id='idimagen-{{$image->id}}' class="col-sm-2">
                <a href="{{$image->url}}" data-toggle="lightbox" data-title="id:{{$image->id}}" data-gallery="gallery">
                      <img style="width:150px;height:120px;" src="{{$image->url}}" class="img-fluid mb-2" />
                    </a>
                    
                  </div>                    
                @endforeach
                
                  
              </div>
            </div>
          </div>

        <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                    <a class="btn btn-danger" href="{{ route('cancelar','admin.product.index') }}">Cancelar</a>
                   
                    <a class="btn btn-outline-success" href="{{ route('admin.product.edit',$producto->slug) }}">Editar</a>
                 
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
       </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>
  </div>

  
 @endsection

