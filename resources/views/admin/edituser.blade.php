<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registrarse - Despacho Jurídico Abogados</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />
</head>

<body class="bg-body">

    <div>
        <img class="img-logo" src="{{ asset('assets/img/logo.png')}}"alt="...">
        <div class="cards  col-md-3 my-auto">
            <div class="container-card ">
                <h4>Editar Usuario</h4>
                <form action="{{route('admin.updateuser', $usuario)}}" method="POST">

                    @csrf
                    @method('put')
                    <div class="form-group ">
                        <label for="input-type">Elija su tipo de usuario</label>
                        <select class="form-control" id="tipousuario" name="tipousuario">
                            <option selected>{{$usuario->tipo_usuario}}</option>
                            <option>Cliente</option>
                            <option>Abogado</option>
                            <option>Usuario</option>
                            <option>Administrador</option>
                        </select>
                        <br> <br>
                        <label for="avatar">Foto de Perfil</label>
                        <input type="file" class="form-control" id="inputavatar" name="inputavatar" >
                        <label for="inputemail">Correo Electrónico</label>
                        <input type="email" class="form-control col-md-9" id="inputemail" name="inputemail" aria-describedby="emailHelp" placeholder="alguien@example.com" value="{{$usuario->correo}}" required>
                        <small id="emailHelp" class="form-text text-muted">El correo que utilizaste para crear tu cuenta</small>

                        <label for="inputpassword">Contraseña</label>
                        <input type="password" class="form-control" id="inputpassword" name="inputpassword" placeholder="Contraseña" value="{{$usuario->password}}" required>
                    </div>

                    <div class="form-group ">
                        <div class="row">
                            <div class="col">
                                <label class="mx-sm-2 mb-10" for="inputname">Nombre</label>
                                <input type="text" class="form-control float-right" id="inputname" name="inputname" placeholder="Carlos" value="{{$usuario->nombre}}" required>
                            </div>
                            <div class="col">
                                <label class="mx-sm-3 mb-2" for="inputlname">Apellidos</label>
                                <input type="text" class="form-control float-left" id="inputlname" name="inputlname" placeholder="Pérez" value="{{$usuario->apellidos}}" required>
                            </div>
                        </div>
                        <label for="inputphone">Número telefónico</label>
                        <input type="text" class="form-control col-md-6" id="inputnumber" name="inputnumber" placeholder="2213445566" max="9999999999" value="{{$usuario->numero}}" required>
                        <br> <br>

                        <label for="Especialidades" id="Especialidadeslabel" name="Especialidadeslabel" style="display:none" >¿Cuál es tu especialidad?</label>
                        <select class="form-control" style="display:none" name="Especialidades" id="Especialidades" >
                        @foreach ($especialidades as $especialidad)
                            <option value="{{$especialidad->Id_especialidad}}">{{$especialidad->nombre}}</option>
                            @endforeach
                        </select>

                        </div>
                    <button type="submit" class="btn btn-main col-md-12">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
 

 let tipousuario  = document.getElementById("tipousuario")
      let especialidades = document.getElementById("Especialidades")
      let especialidadeslabel = document.getElementById("Especialidadeslabel")
      tipousuario.addEventListener("change", () => {
        let eleccion = tipousuario.options[tipousuario.selectedIndex].text
        
        if(eleccion === "Abogado") {
          especialidades.style.display = "inline"
          especialidadeslabel.style.display = "inline"
        } else {
          especialidades.style.display = "none"
          especialidadeslabel.style.display = "none" 
        }
      });

    </script>
</body>

</html>