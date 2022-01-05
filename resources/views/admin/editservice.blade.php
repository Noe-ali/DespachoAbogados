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
                <h4>Editar servicio</h4>
                <form action="{{route('admin.updateservice', $servicio)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group ">
                        <label for="input-type">Nombre</label>
                        <input type="text" class="form-control" id="inputname" name="inputname" placeholder=" Ejemplo: Derecho Penal" value="{{$servicio->nombre}}" required>
                        <label for="avatar">Imagen</label>
                        <input type="file" class="form-control" id="inputimagen" name="inputimagen" required>
                        <label for="inputdescripcion">Descripción</label>
                       
                        <textarea name="inputdescripcion" class="form-control" rows="10" cols="40" placeholder="Escribe aquí de que trata el servicio" value="" required >{{$servicio->descripcion}} </textarea>
                        <label for="inputdocumentacion">Documentación necesaria</label>
                        <textarea name="inputdocumentacion" class="form-control" rows="10" cols="40" placeholder="Escribe aquí los documentos necesarios"  required>{{$servicio->documentacion}}</textarea>

                        </div>
                    <button type="submit" class="btn btn-main col-md-12">Enviar</button>
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
 

    </script>
</body>

</html>