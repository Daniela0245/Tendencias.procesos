<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pago|Moodle</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Pago</h1>
    <form method="POST" action="{{ route('pagos.store') }}">
        @csrf

    <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
    <div id="idHelp" class="form-text">Pago Codigo</div>
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
    <label for="fecha_pago" class="form-label">FECHA DE PAGO</label>
    <input type="date" class="form-control" id="fecha_pago" aria-describedby="fecha_pagoHelp" name="fecha_pago" placeholder="Fecha de Pago">
  </div>

  <div class="mb-3">
    <label for="valor" class="form-label">VALOR</label>
    <input type="text" class="form-control" id="valor" aria-describedby="valorHelp" name="valor" placeholder="Valor de Pago">
  </div>

  <div class="mb-3">
    <label for="tipo_pago" class="form-label">TIPO DE PAGO</label>
    <input type="text" class="form-control" id="tipo_pago" aria-describedby="tipo_pagoHelp" name="tipo_pago" placeholder="Tipo de Pago">
  </div>

  <div class="mb-3">
    <label for="metodo_pago" class="form-label">METODO DE PAGO</label>
    <input type="text" class="form-control" id="metodo_pago" aria-describedby="metodo_pagoHelp" name="metodo_pago" placeholder="Metodo de Pago">
  </div>

  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Agregar</button>
  <a href="{{ route('pagos.index') }} " class="btn btn-warning">Cancelar</a>
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