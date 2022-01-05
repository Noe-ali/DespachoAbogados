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
    
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Conoce todo lo que el despacho tiene para ti.</h3>
            </div>
            <div class="row">
            @foreach ($servicios as $servicio)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{$servicio->Id_especialidad}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/{{$servicio->imagen}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$servicio->nombre}}</div>
                      
                        </div>
                    </div>
                </div>
                
    </footer>
    <!-- Portfolio Modals-->
    
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{$servicio->Id_especialidad}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">{{$servicio->nombre}}</h2>
                                <p class="item-intro text-muted">Consulta la información antes de solicitar una cita</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/{{$servicio->imagen}}" alt="..." />
                                <p>{{$servicio->descripcion}}</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Documentación Necesaria</strong>
                                        {{$servicio->documentacion}}
                                    </li>
                                </ul>
                                
                    <h4>Abogados Especializados</h4>
                    @foreach ($abogados as $abogado)
                    @if ($abogado->esp === $servicio->nombre)
                                <div class="cards2 col-md-12">
            <div class="container-card ">
            <img class="icono-usuario2 float-left" src="assets/img/about/{{$abogado->avatar}}" alt="..." />
            
            <h5>{{$abogado->usuario}} {{$abogado->apellido}}</h5>
            <p class="text-muted">{{$abogado->esp}}</p>
            <a class="btn btn-primary float-right text-uppercase" type="button" href="{{route('citas.addnew', $abogado->Id)}}">
            <i class="fas fa-calendar-alt"></i>
                                    Agendar Cita
</a>
            
            <ul class="list-inline">
            
            <li class="float-left">{{$abogado->correo}}</li>
            <br></br>
            <li class="float-left" >{{$abogado->numero}}</li>
            <br></br>
            <li></li>
            </ul>

                    </div>
                   
                    </div>
                    @endif
                    @endforeach
                
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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