<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inscripcion|Moodle</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Inscripcion</h1>
    <form method="POST" action="{{ route('inscripciones.store') }}">
        @csrf

    <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
    <div id="idHelp" class="form-text">Inscripcion Codigo</div>
  </div>

  <div class="mb-3">
          <label for="id_estudiante" class="form-label">ID ESTUDIANTE</label>
          <select class="form-select" id="id_estudiante" aria-describedby="id_estudianteHelp" name="id_estudiante">
            <option selected>Selecciona un Estudiante</option>
            @foreach($estudiantes as $estudiante)
              <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
            @endforeach
          </select>
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
    <label for="estado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="estado" aria-describedby="estadoHelp" name="estado" placeholder="Estado Inscripcion">
  </div>

  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="{{ route('inscripciones.index') }}" class="btn btn-warning">Cancelar</a>
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