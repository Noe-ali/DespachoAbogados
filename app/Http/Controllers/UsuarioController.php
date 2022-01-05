<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\AbogadoEspecialidad;
use App\Models\cita;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
    {

 $citas = cita::join("usuarios","citas.Id_abogado", "=", "usuarios.Id_usuario")
->select("citas.*", "usuarios.nombre","usuarios.apellidos")
->where('citas.Id_cliente', Auth::user()->Id_usuario)
->get();
 return view('user.profile', compact('citas'));
        
    }

    public function edituser(Usuario $usuario){
        $especialidades = Especialidad::all();
        return view('profile.edit', compact('usuario'), compact('especialidades'));
        
    }

    public function updateuser(Request $request, Usuario $usuario){
        $usuario-> correo = $request->inputemail;
        $usuario-> nombre = $request->inputname;
        $usuario-> apellidos = $request->inputlname;
        $usuario-> numero = $request->inputnumber;
        $usuario-> password = $request-> inputpassword;
        $usuario-> tipo_usuario = $request->tipousuario;
        $usuario-> avatar = $request->inputavatar;
        $usuario->save();
        if ($request->tipousuario == 'Abogado') {
            $abogado=AbogadoEspecialidad::find($usuario->Id_usuario);
            $abogado-> Id_abogado = $usuario->Id_usuario;
            $abogado-> Id_especialidad = $request->Especialidades;
            $abogado->save();
            return redirect()->route('user.profile');
        }else{
            return redirect()->route('user.profile');
        }
        
    }
}
