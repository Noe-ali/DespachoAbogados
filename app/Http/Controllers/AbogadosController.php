<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Mail\StatusMailable;
use App\Models\AbogadoEspecialidad;
use App\Models\cita;
use App\Models\Especialidad;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AbogadosController extends Controller
{
    public function index()
    {

 $citas = cita::join("usuarios","citas.Id_cliente", "=", "usuarios.Id_usuario")
->select("citas.*", "usuarios.nombre","usuarios.apellidos", "usuarios.avatar", "usuarios.numero", "usuarios.correo")
->where('citas.Id_abogado', Auth::user()->Id_usuario)
->get();
 return view('abogados.index', compact('citas'));
        
    }

    public function statuschange(Request $request){
        $cita = cita::find($request->idcita);
        $cita-> estatus = $request->changestatus;
        $cita->save();
        $correo = new StatusMailable($request->changestatus);
       Mail::to($request->citamail)->send($correo);
        
        return redirect()->route('abogados.index');
        
    }

    public function edituser(Usuario $usuario){
        $especialidades = Especialidad::all();
        return view('abogados.edituser', compact('usuario'), compact('especialidades'));
        
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
            return redirect()->route('abogados.index');
        }else{
            return redirect()->route('abogados.index');
        }
        
    }

}
