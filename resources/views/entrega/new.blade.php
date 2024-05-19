<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Entrega|Moodle</title>
</head>
<body>
<div class="container">
    <h1>Agregar Entrega</h1>
    <form method="POST" action="{{ route('entregas.store') }}">
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Entrega Codigo</div>
        </div>

        <div class="mb-3">
            <label for="id_trabajo" class="form-label">ID TRABAJO</label>
            <select class="form-select" id="id_trabajo" aria-describedby="id_trabajoHelp" name="id_trabajo">
                <option selected>Selecciona un Trabajo</option>
                @foreach($trabajos as $trabajo)
                    <option value="{{ $trabajo->id }}">{{ $trabajo->nombre }}</option>
                @endforeach
            </select>
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
    <label for="fecha_entrega" class="form-label">FECHA ENTREGA</label>
    <input type="date" class="form-control" id="fecha_entrega" aria-describedby="fecha_entregaHelp" name="fecha_entrega" placeholder="Fecha Entrega">
  </div>

  <div class="mb-3">
    <label for="archivo" class="form-label">Archivo</label>
    <input type="file" class="form-control" id="archivo" aria-describedby="archivoHelp" name="archivo" placeholder="Archivo Entrega">
  </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('entregas.index') }}" class="btn btn-warning">Cancelar</a>
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
