<?php

namespace App\Http\Controllers;

use App\Models\AbogadoEspecialidad;
use App\Models\Especialidad;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login.index');
    }

    public function acess(Request $request)
    {
        //$usuarios = Usuario::all();
        $usuarios = Usuario::where('correo', $request->inputemail)
        ->where('password', $request->inputpassword)
        ->first();
       if($usuarios == null){
        return redirect()->route('login.index');
       }else{

        Auth::loginUsingId($usuarios->Id_usuario);
    

        if(Auth::user()->tipo_usuario ==  "Administrador"){
            
            return redirect()->route('admin.index');
        }
        else if(Auth::user()->tipo_usuario ==  "Cliente"){
            
            return redirect()->route('home');
        }else if(Auth::user()->tipo_usuario ==  "Usuario"){
            
            return redirect()->route('home');
        }else if(Auth::user()->tipo_usuario ==  "Abogado"){
            
            return redirect()->route('abogados.index');
        }else{
            return $usuarios->tipo_usuario;
        }
        
       }
    }

    public function register(){
        $especialidades = Especialidad::all();
        return view('login.register', compact('especialidades'));
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
            return redirect()->route('login.index');
        }else{
            return redirect()->route('login.index');
        }
    }
}

