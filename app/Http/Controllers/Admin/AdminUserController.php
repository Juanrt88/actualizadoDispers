<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Imprime los datos de la tabla usuario en un rango de 10 filas
        // $users=User::get();
        // return view('admin.user.index',compact('users'));
   
   
        $nombreb = $request->get('nombre');
        $users = User::where('nombre','like',"%$nombreb%")->orderBy('nickname')->paginate(4);
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //FUncion para crear usuarios en la base de datos
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosUsers=request()->all();
      //lo que vale
        // $datosUsers=request()->except('_token');        
        // User::insert($datosUsers);
        // return redirect('admin/user')->with('Mensaje','Empleado agregado con exito');
      //lo que vale


        //return response()->json($datosUsers);  


        $request->validate([
            'nickname' => 'required|max:50|unique:users,nickname',
            'slug' => 'required|max:50|unique:users,slug',

        ]);

        $datosUsers=request()->except('_token');        
         User::insert($datosUsers);
         return redirect()->route('admin.user.index')->with('datos','Registro creado correctamente!');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  por  verificar edicion **********************************************
    public function show($slug)
    {
        $cat= User::where('slug',$slug)->firstOrFail();
        $editar = 'Si';
        
        return view('admin.user.show',compact('cat','editar'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //valiendo
       //$user=User::findOrfail($slug);
       // return view('admin.user.edit',compact('user'));


   
        
         $cat= User::where('slug',$slug)->firstOrFail();
         $editar = 'Si';
        
         return view('admin.user.edit',compact('cat','editar'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualiza a un usuario y el excep elimina el toquen y el metodo de peticion que se esta haciendo de los datos
        $datosUsers=request()->except(['_token','_method']);
        User::where('id','=',$id   )->update($datosUsers); 

        //$user= users::findOrfail($id);**********************ya estaban
        //return view('users.edit',compact('user'));*******************

        // return redirect('admin/user')->with('Mensaje','Empleado modificado con exito');
    

    //     $cat= User::findOrFail($id);
    //     $request->validate([
    //         'nombre' => 'required|max:50|unique:users,nombre,'.$cat->id,
    //         'slug' => 'required|max:50|unique:users,slug,'.$cat->id,

    //     ]);
      
    //     $cat->fill($request->all())->save();
    //    //return $request;
       return redirect()->route('admin.user.index')->with('datos','Registro actualizado correctamente!');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //vale
       // User::destroy($id);
       // return redirect('admin/user')->with('Mensaje','Empleado eliminado con exito');
   
        $cat= User::findOrFail($id);
        $cat->delete();
        return redirect()->route('admin.user.index')->with('datos','Registro eliminado correctamente!');
    }
}
