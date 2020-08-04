@extends('admin.system.admin')
@section('titulo', 'Administración de Usuarios')

@section('breadcrumb')
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('contenido')
    
    

    {{--  @if (Session::has('Mensaje')){{
        Session::get('Mensaje')
    }}
    @endif  --}}



<div id="confirmareliminar" class="row">
  <span style="display:none;" id="urlbase">{{route('admin.user.index')}}</span>
   @include('custom.modal_eliminar')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sección de usuarios</h3>
                <div class="card-tools">
      {{--  formulario busqueda  --}}
                  <form>              
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="nombre" class="form-control float-right" 
                      placeholder="Buscar"
                      value="{{ request()->get('nombre') }}"
                      >
      
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
       {{--  fin formulario busqueda  --}}
                </div> {{--  fin div card tools --}}
              </div> {{--  fin div car header--}}








    <div class="card-body table-responsive p-0" style="height: 550px;">
        <a class=" m-2 float-right btn btn-primary"  href="{{url('/admin/user/create')}}">Crear</a>
    <table class="table table-head-fixed">
        <thead>
            <tr>
               <th>ID</th>
                <th>Nombre</th>
                <th>Nickname</th>
                <th>Email</th>
               {{--  <th>Contraseña</th>  --}}
                <th>Estado</th>                
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                {{--  <td>{{$loop->iteration}}</td>  --}}
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->nickname}}</td>
                <td>{{$user->email}}</td>
               {{--  <td>{{$user->password}}</td>  --}}
                <td>{{$user->estado}}</td>
                <td>
                     <a class="btn btn-warning"  
                        href="{{ route('admin.user.show',$user->slug) }}">Ver</a>
                    

                      <a class="btn btn-info" 
                            href="{{ route('admin.user.edit',$user->slug) }}">Editar</a>
                       
   
                     
                        <a class="btn btn-danger" 
                        href="{{ route('admin.user.index') }}" 
                        v-on:click.prevent="deseas_eliminar({{$user->id}})"
                        >Eliminar</a>


                        
                        
                    
                </td>

            </tr>
            @endforeach            
        </tbody>
    </table>
    {{ $users->appends($_GET)->links() }}
    </div>
</div>
</div>
</div>   {{--  div  conf elimin  --}}
    @endsection   