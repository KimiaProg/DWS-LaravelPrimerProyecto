<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
 
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Libro;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf($isbn='')
    {
        if($isbn==''){
            $books= Libro::all();

            $data = [
                'libros' => $books
            ];

            $pdf = PDF::loadView('pdfLibro', $data);
         
            return $pdf->download('Libros.pdf');
        }else{
            $book= Libro::find($isbn);

            $data = [
                'libro' => $book
            ];
            $pdf = PDF::loadView('pdfLibro', $data);
         
            return $pdf->download('Libro.pdf');
        }


    }
}