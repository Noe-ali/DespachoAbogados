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
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

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

    <br></br>

    <br></br>
    <br></br>
    <p>abogado:  {{$abogado->apellidos}} {{$abogado->correo}}</p>
   <!-- Portfolio item 1 modal popup-->
   <div class="cards col-md-4 " id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="false">
       <h5 class="text-center">Agenda tu cita con {{$abogado->nombre}}</h5>
   <form action="{{route('citas.store')}}" method="POST">
@csrf
<div class="form-group ">
<input type="hidden" class="form-control" id="id_abogado" name="id_abogado"  readonly value="{{$abogado->Id_usuario}}" required>
<input type="hidden" class="form-control" id="id_cliente" name="id_cliente" readonly value="{{$user->Id_usuario}}" required>


    <label for="input-type">Nombre</label>
    <input type="text" class="form-control " id="inputname" name="inputname" value="{{$user->nombre}}" readonly required>
    <label for="input-type">Apellidos</label>
    <input type="text" class="form-control " id="inputname" name="inputname" value="{{$user->apellidos}}" readonly required>
    <label for="avatar">Fecha</label>
    <input type="date" class="form-control" id="inputdate" name="inputdate" required>
    <label for="inputdescripcion">Descripción</label>
   
    <textarea name="inputdescripcion" class="form-control" rows="10" cols="40" placeholder="Cuentanos brevemente tu situacion" required ></textarea>

    </div>
    <button type="submit" class="btn btn-primary col-md-12 text-uppercase" type="button" href="}">
            <i class="fas fa-calendar-alt"></i>
                                    Agendar Cita
            </button>
</form>

                            </div>
                   
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
