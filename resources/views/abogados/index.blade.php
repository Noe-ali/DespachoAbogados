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
            <a class="dropdown-toggle nav-link" data-toggle="dropdown">
              <img src="assets/img/about/{{$user->avatar}}" class="profile-image img-circle"> {{ $user->nombre}} <b class="caret"></b></a>
            <ul class="dropdown-menu bg-dark ">

              <li class="divider"></li>
              <li class="nav-item"><a class="nav-link" href="{{route('login.index')}}"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
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
              <div class="col-md-4">
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

              <form class="" action="{{route('abogados.edituser', $user->Id_usuario)}}" method="get">
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
                      <th scope="col">Solicita</th>
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
                      <td scope="row"><a class="portfolio-link btn btn-primary" data-bs-toggle="modal" href="#portfolioModal{{$cita->Id_cita}}">Ver cita</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div>


        </div>
        @foreach ($citas as $cita)
        <div class="portfolio-modal modal fade" id="portfolioModal{{$cita->Id_cita}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="modal-body">
                      <!-- Project details-->
                      <h2 class="text-uppercase">{{$cita->nombre}} {{$cita->apellidos}}</h2>
                      <p class="item-intro text-muted">Solicitante de {{$cita->Servicio}}</p>
                      <img class="img-fluid icono-usuario mx-auto" src="assets/img/about/{{$cita->avatar}}" alt="..." />
                      <p>{{$cita->descripcion}}</p>
                      <h5>ESTATUS: {{$cita->estatus}}</h5>
                      <ul class="list-inline">

                        <li class="float-left">{{$cita->correo}}</li>
                        <br></br>
                        <li class="float-left">{{$cita->numero}}</li>
                        <br></br>
                        <li></li>
                      </ul>

                    </div>

                  </div>

                  @if ($cita->estatus === "Por aprobar")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="Recepcion de Documentos" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar Recepcion de Documentos
                    </button>
                  </form>
                  @elseif ($cita->estatus == "Recepcion de Documentos")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="Aprobado" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar Aprobado
                    </button>
                  </form>
                  @elseif ($cita->estatus == "Aprobado")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="En Proceso" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar "En Proceso"
                    </button>
                  </form>
                  @elseif ($cita->estatus == "En Proceso")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="Culminado" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar "Terminado"
                    </button>
                  </form>
                  @elseif ($cita->estatus == "Terminado")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="Entregado" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar "Entregado"
                    </button>
                  </form>
                  @elseif ($cita->estatus == "Entregado")
                  <form action="{{route('abogados.statuschange')}}" method="POST">
                    @csrf
                    <input type="hidden" value="Entregado" name="changestatus">
                    <input type="hidden" value="{{$cita->Id_cita}}" name="idcita">
                    <input type="hidden" value="{{$cita->correo}}" name="citamail">
                    <button type="submit" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                      Marcar "Culminado"
                    </button>
                  </form>
                  @elseif ($cita->estatus == "Culminado")

                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                    Cerrar
                  </button>
                  </form>
                  @endif

                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach


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