<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $pdf = PDF::loadView('prueba');
        return $pdf->stream('prueba.pdf');
    }




    public function guardarpdf(){

        $categorias = Category::all();
        $pdf = PDF::loadView('admin.category.pdfcategoryhorizontal',compact('categorias'));
    	Storage::disk('public')->put(date('Y-m-d-H-i-s').'-categoriashorizontal', $pdf);
    	return redirect()->back()->with('status', '¡PDF guardado correctamente!');
    }

    public function PDFCategoriasHorizontal(Request $request){


     $categorias = Category::all();
     $pdf = PDF::loadView('admin.category.pdfcategoryhorizontal',compact('categorias'));
    
     
     $data["email"]=$request->get("juandiego-271296@hotmail.es");
     $data["client_name"]=$request->get("Juan");
     $data["subject"]=$request->get("Gracias por comprar");

     

     
         Mail::send('welcome', $data, function($message)use($data,$pdf) {
         $message->to("juandiego-271296@hotmail.es", "Juan")
         ->subject("Gracias por comprar mamaverga")
         ->attachData($pdf->output(), "invoice.pdf");
         });
    
     if (Mail::failures()) {
          $this->statusdesc  =   "Error sending mail";
          $this->statuscode  =   "0";

     }else{

        $this->statusdesc  =   "Message sent Succesfully";
        $this->statuscode  =   "1";
     }
    // return response()->json(compact('this'));
    //Mail::to('juandiego-271296@hotmail.es')->send(new TestMail());

    return $pdf->setPaper('a4', 'landscape')->download('categoriashorizontal.pdf');


    // return response()->json(compact('this'));







    }



    public function PDFCategorias(Request $request)
    {
     
        $categorias = Category::all();

        $pdf = PDF::loadView('admin.category.pdfcategory',compact('categorias'));
        return $pdf->download('categorias.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
