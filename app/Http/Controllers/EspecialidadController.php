<?php

namespace App\Http\Controllers;

use App\Models\AbogadoEspecialidad;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {
        $abogados = AbogadoEspecialidad::join("usuarios","usuarios.Id_usuario", "=", "abogadoespecialidad.Id_abogado")
        ->join("especialidades", "especialidades.Id_especialidad", "=", "abogadoespecialidad.Id_especialidad")
    ->select("abogadoespecialidad.Id_abogado as Id", "usuarios.nombre as usuario","usuarios.correo as correo","usuarios.numero as numero","especialidades.nombre as esp", "usuarios.avatar", "usuarios.apellidos as apellido")
    ->get();
        $servicios = Especialidad::all();
        return view('services.index', compact('servicios'), compact('abogados'));
        
    }
}
