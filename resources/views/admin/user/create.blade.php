@extends('admin.system.admin')
@section('titulo','Crear Usuario Administrador')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Usuarios</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection



@section('contenido')
<div id="apiuser">

  <form action="{{ route('admin.user.store') }}" method="POST"  >
    @csrf
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Administracion de Usuarios</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">              
                <div class="form-group">

                    <label for="nombre">Nombre</label>
                    <input v-model="nombre" 
                    class="form-control" type="text" name="nombre" id="nombre">

                    <label for="nombre">Nickname</label>
                    <input v-model="nickname" 
                    @blur="getUser" 
                    @focus = "div_aparecer= false"
                    class="form-control" type="text" name="nickname" id="nickname">

                    <label for="slug">Slug</label>
                    <input readonly v-model="generarSLug"  class="form-control" type="text" name="slug" id="slug">
                    <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                      @{{ div_mensajeslug }}
                    </div>
                    <br v-if="div_aparecer">
                   

                    <label for="email">Correo</label>
                    <input type="email" v-model="email" 
                    class="form-control" type="text" name="email" id="email" required>

                    <label for="password">Contraseña</label>
                    <input type="password" v-model="password" 
                    class="form-control" type="text" name="password" id="password" required>


                    <input type="hidden" name="rol" id="rol" value="admnistrador">
                      
                </div>
              </div>



              <!-- /.card-body -->
              <div class="card-footer">
      
                <a class="btn btn-danger" href="{{ route('cancelar','admin.user.index') }}">Cancelar</a>
      
      
                          <input 
                          :disabled = "deshabilitar_boton==1"
                        type="submit" value="Guardar" class="btn btn-primary float-right">
            
                      
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </form>
      </div>
      
@endsection









        </form>
    

