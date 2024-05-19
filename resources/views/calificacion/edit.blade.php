<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calificacion|Moodle</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Calificacion</h1>
    <form method="POST" action="{{ route('calificaciones.update', ['calificacion' => $calificacion->id]) }}">
    @method('put')    
    @csrf

    <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled" value="{{ $calificacion->id }}">
    <div id="idHelp" class="form-text">Calificacion Codigo</div>
  </div>

  <div class="mb-3">
          <label for="id_inscripcion" class="form-label">ID INSCRIPCION</label>
          <select class="form-select" id="id_inscripcion" aria-describedby="id_inscripcionHelp" name="id_inscripcion" value="{{ $calificacion->id_inscripcion }}">
            <option selected>Selecciona un Inscripcion</option>
            @foreach($inscripciones as $inscripcion)
              <option value="{{ $inscripcion->id }}">{{ $inscripcion->nombre }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="id_entrega" class="form-label">ID ENTREGA</label>
          <select class="form-select" id="id_entrega" aria-describedby="id_entregaHelp" name="id_entrega" value="{{ $calificacion->id_entrega }}">
            <option selected>Selecciona un Entrega</option>
            @foreach($entregas as $entrega)
              <option value="{{ $entrega->id }}">{{ $entrega->nombre }}</option>
            @endforeach
          </select>
        </div>

     <div class="mb-3">
    <label for="nota" class="form-label">NOTA</label>
    <input type="text" class="form-control" id="nota" aria-describedby="notaHelp" name="nota" placeholder="Nota" value="{{ $calificacion->nota }}">
  </div>

  <div class="mb-3">
    <label for="observacion" class="form-label">ARCHIVO</label>
    <input type="text" class="form-control" id="observacion" aria-describedby="observacionHelp" name="observacion" placeholder="Observacion" value="{{ $calificacion->observacion }}">
  </div>


  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <a href="{{ route('calificaciones.index') }}" class="btn btn-warning">Cancelar</a>
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