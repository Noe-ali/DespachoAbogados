<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\AbogadoEspecialidad;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    
    public function home()
    {
        $abogados = AbogadoEspecialidad::join("usuarios","usuarios.Id_usuario", "=", "abogadoespecialidad.Id_abogado")
        ->join("especialidades", "especialidades.Id_especialidad", "=", "abogadoespecialidad.Id_especialidad")
    ->select("usuarios.nombre as usuario","especialidades.nombre as esp", "usuarios.avatar")
    ->take(3)    
    ->get();
    
        return view('welcome', compact('abogados'));

    }

    public function contact(Request $request)
    {
        $correo = new ContactanosMailable($request->all());
        Mail::to('noe.rivera1110@uppuebla.edu.mx')->send($correo);
        return redirect()->route('home');
    }
}
