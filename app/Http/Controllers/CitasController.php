<?php

namespace App\Http\Controllers;

use App\Models\AbogadoEspecialidad;
use App\Models\cita;
use App\Models\Usuario;
use Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function addnew(Usuario $abogado){
        
        return view('citas.addnew', compact('abogado'));
        
    }

    public function store(Request $request){
        
        $abogado = AbogadoEspecialidad::join("usuarios","usuarios.Id_usuario", "=", "abogadoespecialidad.Id_abogado")
        ->join("especialidades", "especialidades.Id_especialidad", "=", "abogadoespecialidad.Id_especialidad")
    ->select("usuarios.correo as correo","especialidades.nombre")
    ->where('usuarios.Id_usuario', $request->id_abogado)
    ->first();
    
        $cita = new cita();
        $cita-> Id_cliente = $request->id_cliente;
        $cita-> Id_abogado = $request->id_abogado;
        $cita-> fecha = $request->inputdate;
        $cita-> descripcion = $request->inputdescripcion;
        $cita-> estatus = "Por aprobar";
        $cita-> Servicio = $abogado->nombre;

        $cita->save();
       
        return redirect()->route('services.index');
        
    }
}
