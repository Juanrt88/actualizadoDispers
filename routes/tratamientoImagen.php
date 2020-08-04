<?php
//si el usuario tiene una imagen
$usuario=App\User::find(1);
$image=$usuario->image;
if($image){
    echo 'tiene una imagen';
}else{
    echo 'no tiene una imagen';
}
return $image;


/* -------PRUEBAS CON IMAGENES------- */
 
    //crear una imagen para un usuario utilizando save

    $imagen=new App\Image(['url'=>'images/tienda/avatar1.png']);
    $usuario=App\User::find(1);
    $usuario->image()->save($imagen);



// Mostrar imagenes

    $image=App\Image::orderBy('id','Desc')->get();
    return $image;

    //obtener las informciones de las imagenes
    $usuario=App\User::find(1);
    return $usuario->image->url;


    //crear varias imagenes para un producto utilizadno el metodo save many
    $producto=App\Product::find(3);
    $producto -> images()->saveMany([
        new App\Image(['url'=>'images/tienda/avatar1.png']),
        new App\Image(['url'=>'images/tienda/avatar2.png']),
    ]);
    return $producto;
        //que imagenes pertenecen a un prodcuto
        return $producto->images;

    // MEJOR crear imagen para el usuario con create
    $usuario=App\User::find(1);
    $usuario->image()->create([
            'url'=>'images/tienda/avatar1',
        ]);
    return $usuario;
     // otra forma
     $imagen=[];
     $imagen['url']='images/tienda/avatar2.png';
 
     $usuario=App\User::find(1);
     $usuario->image()->create([$imagen]);
     return $usuario;

// MEJOR productos create many
$imagen=[];
$imagen[]['url']='images/tienda/avatar2.png';
$imagen[]['url']='images/tienda/avatar1.png';

$producto=App\Product::find(2);
$producto->images()->createMany($imagen);
return $producto->images;

//ACTUALIZAR una imagen de usuario
$usuario=App\User::find(1);
$usuario->image->url='images/tienda/avatar2.png';
$usuario->push();
return $usuario->image;

//ACTUALIZAR una imagen de Productos
$producto=App\Product::find(3);
    $producto->images[0]->url='image/tienda/avatar2.png';
    $producto->push();
    return $producto->images;

//producto o usuario relacionado a una imagen
$image=App\Image::find(4);
return $image->imageable;

//delimitar registros
$producto=App\Product::find(3);
return $producto->images()->where('url','images/tienda/avatar2.png')->get();

//ordenar registros que provienen de las relaciones
$producto=App\Product::find(2);
return $producto->images()->where('url','images/tienda/avatar1.png')->orderBy('id')->get();

// 11 contar registros relacionados usuario
$usuario=App\User::withCount('image')->get();
$usuario=$usuario->find(1);
return $usuario;

// 11 contar registros relacionados producto
$productos=App\Product::withCount('images')->get();
$productos=$productos->find(2);
return $productos;

// 11 contar registros relacionados
    //solo con el prodcuto especifico :o
    $productos=App\Product::find(2);
    return $productos->loadCount('images');

//Lazy loading carga diferida
$producto=App\Product::find(3);
$iamgen=$producto->image;
$categoria=$producto->category;

//carga previa  (eager loading) LOCOO
$producto=App\Product::with('images')->get();
return $producto;

//carga previa  (eager loading)
$user=App\user::with('image')->find(1);
return $user->image->url;

//carga previa  (eager loading) relaciones de todos los productos

$producto=App\Product::with('images','category')->get();
return $producto;

//Relaciones de un producto especifico
$producto=App\Product::with('images','category')->find(3);
    return $producto;

    // mostrar los campos que quieres 
    $producto=App\Product::with('images:id,imageable_id,url','category:id,nombre')->find(3);
    return $producto;    

     //eliminar una imagenes

     $producto=App\Product::find(3);
     $producto->images[0]->delete();//borrar una imagen
     $producto->images()->delete();//borrar todas
     return $producto;