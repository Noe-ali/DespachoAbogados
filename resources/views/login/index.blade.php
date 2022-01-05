<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Iniciar Sesión - Despacho Jurídico Abogados</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <link href="css/styles2.css" rel="stylesheet" />
</head>

<body class="bg-body">

    <div>
    <img class="img-logo" src="assets/img/logo.png" alt="...">
        <div class="cards  col-md-2 my-auto">
        <div class="container-card ">
        <h4>Iniciar Sesión</h4>
            <form action="{{route('login.acess')}}" method="POST">
            @csrf
                <div class="form-group ">
                    <label for="inputemail">Correo Electrónico</label>
                    <input type="email" class="form-control" id="inputemail" name="inputemail" aria-describedby="emailHelp" placeholder="alguien@example.com">
                    <small id="emailHelp" class="form-text text-muted">El correo que utilizaste para crear tu cuenta</small>
                </div>
                <div class="form-group">
                    <label for="inputpassword">Contraseña</label>
                    <input type="password" class="form-control" id="inputpassword" name="inputpassword" placeholder="Contraseña">
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <br> <br>

                </div>
                <button type="submit" class="btn btn-main col-md-12 ">Enviar</button>
            </form>

            <label for="submit"> Aún no te has registrado? <a href="{{route('login.register')}}"> Registrarse</a> </label>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>