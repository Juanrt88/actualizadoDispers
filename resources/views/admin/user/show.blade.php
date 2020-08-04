@extends('admin.system.admin')
@section('titulo', 'Ver Usuario')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Usuarios</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('contenido')


<div id="apiuser">
    <form>
      @csrf
    

      <span style="display:none;" id="editar">{{ $editar }}</span>
      <span style="display:none;" id="nombretemp">{{ $cat->nombre}}</span>
      
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Administración de Usuarios</h3>

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
                    <input  
                    class="form-control" type="text" name="nombre" id="nombre" value="{{ $cat->nombre }}" readonly>

                    <label for="nombre">Nickname</label>
                    <input v-model="nickname" 
                    @blur="getUser" 
                    @focus = "div_aparecer= false"
                    class="form-control" type="text" name="nickname" id="nickname" value="{{ $cat->nickname }}"readonly >

                    <label for="slug">Slug</label>
                    <input readonly v-model="generarSLug"  class="form-control" type="text" name="slug" id="slug">
                    <div v-if="div_aparecer" v-bind:class="div_clase_slug" value="{{ $cat->slug }}" readonly>
                      @{{ div_mensajeslug }}
                    </div>
                    <br v-if="div_aparecer">
                   

                    <label for="email">Correo</label>
                    <input type="email" 
                    class="form-control" type="text" name="email" id="email" value="{{ $cat->email }}" readonly>

                    <label for="password">Contraseña</label>
                    <input type="password" 
                    class="form-control" type="text" name="password" id="password" value="{{ $cat->password }}" readonly>


                    <input type="hidden" name="rol" id="rol" value="{{ $cat->rol }}">

                </div>
            </div>

            <div class="card-footer">
              <a class="btn btn-danger" href="{{ route('cancelar','admin.user.index') }}">Cancelar</a>
            
              <a class="btn btn-outline-success float-right" href="{{ route('admin.user.edit',$cat->slug) }}">Editar</a>
            
  
              
            
                  
          </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </form>
    </div>

@endsection    







