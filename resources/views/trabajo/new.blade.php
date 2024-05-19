<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Trabajos|Moodle</title>
</head>
<body>
<div class="container">
    <h1>Agregar Trabajo</h1>
    <form method="POST" action="{{ route('trabajos.store') }}">
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Trabajo Codigo</div>
        </div>

        <div class="mb-3">
            <label for="id_curso" class="form-label">ID CURSO</label>
            <select class="form-select" id="id_curso" aria-describedby="id_cursoHelp" name="id_curso">
                <option selected>Selecciona un Curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_profesor" class="form-label">ID PROFESOR</label>
            <select class="form-select" id="id_profesor" aria-describedby="id_profesorHelp" name="id_profesor">
                <option selected>Selecciona un Profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre Trabajo">
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp" name="descripcion" placeholder="Trabajo Descripcion">
  </div>

  <div class="mb-3">
    <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
    <input type="date" class="form-control" id="fecha_entrega" aria-describedby="fecha_entregaHelp" name="fecha_entrega" placeholder="Fecha Entrega Trabajo">
  </div>

  <div class="mb-3">
    <label for="porcentaje" class="form-label">Porcentaje</label>
    <input type="text" class="form-control" id="porcentaje" aria-describedby="porcentajeHelp" name="porcentaje" placeholder="porcentaje Trabajo">
  </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('trabajos.index') }}" class="btn btn-warning">Cancelar</a>
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
