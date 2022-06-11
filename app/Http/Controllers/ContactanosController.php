<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    public function index()
    {
        # code...
        return view('email.index');
    }

    public function store(Request $request)
    {
        # code...
        $correo = new ContactanosMailable($request->all());
        $contacto = $correo->contacto;
        
     Mail::to($contacto['correo'])->send($correo);
    //  return redirect()->action([ProfesorController::class,'index']);
     return redirect()->route('profesores.index')->with('info','Mensaje enviado correctamente!');
    }
}
