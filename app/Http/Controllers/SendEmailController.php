<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Mail; 
use App\Mail\NotifyMail;
use App\Models\peticion;
 
class SendEmailController extends Controller
{
    public function solicitar()
    {
       return view("libros.solicitarLibro");
    } 

    public function enviarCorreo()
    {
       if(!empty($_POST['nomApe']) && !empty($_POST['titulo']) && !empty($_POST['correo']) && preg_match('/^.*@[a-zA-Z0-9]*\.[a-zA-Z0-9]*$/',$_POST['correo'])){
           //Insertar en la base de datos
            $peticion = new peticion();
            $peticion->nombreApellido = $_POST['nomApe'];
            $peticion->correoElectronico = $_POST['correo'];
            $peticion->tituloLibro = $_POST['titulo'];
            $peticion->save();
            //Enviar el correo
            Mail::to($_POST['correo'])->send(new NotifyMail($_POST['titulo']));
            return "Se le ha enviado un correo";
       }else{
           return "Error";
       }
    }

    public function listarPeticiones()
    {
       $peticiones= peticion::all();
       return view("libros.listarPeticiones", compact('peticiones'));
    } 


}