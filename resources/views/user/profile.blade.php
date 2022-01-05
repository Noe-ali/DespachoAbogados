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
                    <li class="nav-item"><a class="nav-link" href="/home#begin">Comenzar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services.index')}}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home#about">Proceso</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home#team">Equipo</a></li>
                    <li class="dropdown nav-item ">
                        <a  class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="assets/img/about/{{$user->avatar}}" class="profile-image img-circle"> {{ $user->nombre}} <b class="caret"></b></a>
                        <ul class="dropdown-menu bg-dark ">
                            <li class="nav-item" ><a class="nav-link" href="{{route('user.profile')}}"><i class="fa fa-cog "></i class=> Perfil</a></li>
                            <li class="divider"></li>
                            <li class="nav-item" ><a class="nav-link" href="{{route('login.index')}}"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
   
                </ul>
                
            </div>
        </div>
    </nav>

    <main class="container ">
    <section class="page-section" id="profile">
        <br></br>
    <div class="row justify-content-between">
      <div class="col-md-4 ">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Perfil</h5>
            <div class="col-md-4" >
            <img src="assets/img/about/{{ $user->avatar}}" class="icono-usuario ">
            </div>

            <form action="#" method="">
              <div class="row">
                <div class="col">
                  <label class="form-label">Nombre(s)</label>
                  <p></p>

                  <input type="text" class="form-control" name="name" value=" {{ $user->nombre}}" readonly>
                </div>
                <div class="col">
                  <label class="form-label">Apellido(s)</label>
                  <input type="text" class="form-control" name="lastName" value="{{ $user->apellidos}}" readonly>
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <label class="form-label">Correo Electronico</label>
                  <input type="email" id="inputCorreo" class="form-control" value="{{ $user->correo}}" readonly>
                </div>
              </div>
            </form>
            <br><br>

            <form class="" action="{{route('usuario.edituser', $user->Id_usuario)}}" method="get">
                    @csrf
                    
                    <button type="submit" class="btn btn-main btn-primary col-md-12">Editar usuario</i></button>
                  </form>



            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title col-4">Mis Tramites</h5>
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead class="btn-teal">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Abogado</th>
                    <th scope="col"></th>
                    <th scope="col">Estatus</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($citas as $cita)
                  <tr>
                    <th scope="row">{{$cita->Id_cita}}</th>
                    <td scope="row">{{$cita->Servicio}}</td>
                    <td scope="row">{{$cita->fecha}}</td>
                    <td scope="row">{{$cita->nombre}}</td>
                    <td scope="row">{{$cita->apellidos}}</td>
                    <td scope="row">{{$cita->estatus}}</td>
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