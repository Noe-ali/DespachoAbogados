<!DOCTYPE html>
<html lang="en">
<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Despacho Jurídico Abogados</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles2.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
     <!-- Navigation-->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a href="#page-top"><img class="img-logo" src="assets/img/logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                   
                    <li class="dropdown nav-item ">
                        <a  class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="assets/img/about/{{$user->avatar}}" class="profile-image img-circle">  {{$user->nombre}} [ADMIN]<b class="caret"></b></a>
                        <ul class="dropdown-menu bg-dark ">
                        
                            <li class="divider"></li>
                            <li class="nav-item" ><a class="nav-link" href="{{route('login.index')}}"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
   
                </ul>
                
            </div>
        </div>
    </nav>

    <main class="container ">
<br></br>
<br></br>
<br></br>

<div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title text-center">Usuarios</h5>
            <br>
            <a class="btn btn-main btn-primary float-right" href="{{route('admin.create')}}"><i class="fas fa-plus"></i></a>
           
            <div class="table-responsive">
              
              <table class="table">
                <thead class="btn-teal">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Número telefónico</th>
                    <th scope="col">Tipo de Usuario</th>
                    <th scope="col">Creado el:</th>                
                    
                  </tr>
                  
                </thead>

                <tbody>
                @foreach ($usuarios as $usuario)
                  <tr>
                    <th scope="row">{{$usuario->Id_usuario}}</th>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->correo}}</td>
                    <td>{{$usuario->numero}}</td>
                    <td>{{$usuario->tipo_usuario}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td><a class="btn btn-main btn-primary float-right" href="{{route('admin.edituser', $usuario->Id_usuario)}}"><i class="fas fa-edit"></i></a></td>
                    <td><form class="" action="{{route('admin.deleteuser', $usuario)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-main btn-primary float-right"><i class="fas fa-minus-circle"></i></button>
                  </form></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title text-center">Servicios</h5>
            <a class="btn btn-main btn-primary float-right" href="{{route('admin.createservice')}}"><i class="fas fa-plus"></i></a>
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead class="btn-teal">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($servicios as $servicio)
                  <tr>
                    <th scope="row">{{$servicio->Id_especialidad}}</th>
                    <td>{{$servicio->nombre}}</td>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-main btn-primary float-right" href="{{route('admin.editservice', $servicio->Id_especialidad)}}"><i class="fas fa-edit"></i></a></td>
    <td>                <form class="" action="{{route('admin.deleteservice', $servicio)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-main btn-primary float-right"><i class="fas fa-minus-circle"></i></button>
                  </form></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>

          </div>
        </div>
      </div>
  </main>
 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>