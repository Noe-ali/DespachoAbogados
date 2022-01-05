<?php

namespace App\Http\Controllers;

use App\Models\AbogadoEspecialidad;
use App\Models\Especialidad;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usuarios = Usuario::paginate();
        $servicios = Especialidad::paginate();
        return view('admin.index', compact('usuarios'), compact('servicios'));
    }

    public function create(){
        $especialidades = Especialidad::all();
        return view('admin.create', compact('especialidades')); 
    }
    public function createservice(){
        
        return view('admin.createservice');
    }
    public function editservice(Especialidad $servicio){
        return view('admin.editservice', compact('servicio'));
        
    }



    public function userstore(Request $request){
        $usuario = new Usuario();
        $usuario-> correo = $request->inputemail;
        $usuario-> nombre = $request->inputname;
        $usuario-> apellidos = $request->inputlname;
        $usuario-> numero = $request->inputnumber;
        $usuario-> password = $request-> inputpassword;
        $usuario-> tipo_usuario = $request->tipousuario;
        $usuario-> avatar = $request->inputavatar;
        $usuario->save();
        $lastregister = Usuario::latest('Id_usuario')->first();
        if ($lastregister->tipo_usuario == 'Abogado') {
            $abogado=new AbogadoEspecialidad();
            $abogado-> Id_abogado = $lastregister->Id_usuario;
            $abogado-> Id_especialidad = $request->Especialidades;
            $abogado->save();
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.index');
        }
       
       
        
    }
    public function servicestore(Request $request){
        $especialidad = new Especialidad();
        $especialidad-> nombre = $request->inputname;
        $especialidad-> descripcion = $request->inputdescripcion;
        $especialidad-> imagen = $request->inputimagen;
        $especialidad-> documentacion = $request->inputdocumentacion;
        $especialidad->save();
       
        return redirect()->route('admin.index');
        
    }
    public function updateservice(Request $request, Especialidad $servicio){
        
        $servicio-> nombre = $request->inputname;
        $servicio-> descripcion = $request->inputdescripcion;
        $servicio-> imagen = $request->inputimagen;
        $servicio-> documentacion = $request->inputdocumentacion;
        $servicio->save();
       
        return redirect()->route('admin.index');
        
    }

    public function edituser(Usuario $usuario){
        $especialidades = Especialidad::all();
        return view('admin.edituser', compact('usuario'), compact('especialidades'));
        
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
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.index');
        }
        
    }

    public function deleteuser(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('admin.index');
        
    }

    public function deleteservice(Especialidad $servicio){
        $servicio->delete();
        return redirect()->route('admin.index');
        
        
    }
}
