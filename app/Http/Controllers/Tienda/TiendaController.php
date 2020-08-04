<?php

namespace App\Http\Controllers\Tienda;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index($slug)
    {
        $categoria=Category::where('slug',$slug)->firstOrFail();
        $productos=Product::with('images')->where('category_id',$categoria->id)->orderBy('nombre')->paginate(9);
        $nombre=$categoria->nombre;

        $categorias_ropa=Category::where('slug','like',"%ropa%")->get();
        $categorias_otras=Category::where('slug','not like',"%ropa%")->get();
       

        return view('tienda.plantilla_categoria',compact('productos','nombre','categorias_ropa','categorias_otras'));
    }
}
