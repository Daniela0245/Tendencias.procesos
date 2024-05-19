<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar|Profesor</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Profesor</h1>
    <form method="POST" action="{{ route('profesores.update',['profesor' => $profesor->id]) }}">
    @method('put')   
    @csrf

  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled" value="{{$profesor->id }}">
    <div id="idhelp" class="form-text">Profesor ID</div>
  </div>

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre Profesor" value="{{$profesor->nombre }}">
  </div>

  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" aria-describedby="apellidoHelp" name="apellido" placeholder="Apellido Profesor" value="{{$profesor->apellido }}">
  </div>

  <div class="mb-3">
    <label for="cedula" class="form-label">Cedula</label>
    <input type="text" class="form-control" id="cedula" aria-describedby="cedulaHelp" name="cedula" placeholder="Cedula Profesor" value="{{$profesor->cedula }}">
  </div>

  <div class="mb-3">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" aria-describedby="direccionHelp" name="direccion" placeholder="Direccion Profesor" value="{{$profesor->direccion }}">
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" placeholder="Telefono Profesor" value="{{$profesor->telefono }}">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email Profesor" value="{{$profesor->email }}">
  </div>

  <div class="mb-3">
    <label for="especializacion" class="form-label">Especializacion</label>
    <input type="text" class="form-control" id="especializacion" aria-describedby="especializacionHelp" name="especializacion" placeholder="Especializacion Profesor" value="{{$profesor->especializacion }}">
  </div>

  <div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" aria-describedby="tituloHelp" name="titulo" placeholder="Titulo Profesor" value="{{$profesor->titulo }}">
  </div>

  <div class="mb-3">
    <label for="departamento" class="form-label">Departamento</label>
    <input type="text" class="form-control" id="departamento" aria-describedby="departamentoHelp" name="departamento" placeholder="Departamento Profesor" value="{{$profesor->departamento }}">
  </div>



  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="{{ route('profesores.index') }}" class="btn btn-warning">Cancelar</a>
</div>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>