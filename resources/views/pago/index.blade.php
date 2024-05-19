<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pagos|Moodle</title>
  </head>
  <body>

  <?php use Carbon\Carbon; ?>
  <x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Pago') }}
</h2>
</x-slot>
    <div class="container">
    <h1>Listado de Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="btn btn-sucess">Agregar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">ID ESTUDIANTE</th>
      <th scope="col">FECHA DE PAGO</th>
      <th scope="col">VALOR</th>
      <th scope="col">TIPO DE PAGO</th>
      <th scope="col">METODO DE PAGO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pagos as $pago)
    <tr>
      <th scope="row">{{ $pago->id }}</th>
      <td>{{ $pago->estudiante->nombre }}</td>
      <td>{{ Carbon::parse($pago->fecha_pago)->format('d-m-Y') }}</td> 
      <td>{{ $pago->valor }}</td>
      <td>{{ $pago->tipo_pago }}</td>
      <td>{{ $pago->metodo_pago }}</td>
      <td>
        
        <a href="{{ route('pagos.edit', ['pago' => $pago->id]) }}"
        class="btn btn-info"> Editar </a></li>
        <form action="{{ route('pagos.destroy',['pago' => $pago->id]) }}"
        method='POST' style="display: inline-block">
        @method('delete')
        @csrf
        <input class="btn btn-danger" type="submit" value="Delete">
</form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
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
</x-app-layout>