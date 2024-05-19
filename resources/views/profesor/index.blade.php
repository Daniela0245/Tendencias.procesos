<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Profesores|Moodle</title>
  </head>
  <body>
  <x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Profesor') }}
</h2>
</x-slot>
    <h1>Listado de Profesores</h1>
    <a href="{{ route('profesores.create')}}" class="btn btn-success">Agregar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ESPECIALIZACION</th>
      <th scope="col">TITULO</th>
      <th scope="col">DEPARTAMENTO</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($profesores as $profesor)
    <tr>
      <th scope="row">{{ $profesor->id}}</th>
      <td>{{ $profesor->nombre}}</td>
      <td>{{ $profesor->apellido}}</td>
      <td>{{ $profesor->cedula}}</td>
      <td>{{ $profesor->direccion}}</td>
      <td>{{ $profesor->telefono}}</td>
      <td>{{ $profesor->email}}</td>
      <td>{{ $profesor->especializacion}}</td>
      <td>{{ $profesor->titulo}}</td>
      <td>{{ $profesor->departamento}}</td>
      <td>

        <a href="{{ route('profesores.edit',['profesor'=>$profesor->id]) }}" class="btn btn-info"> Editar </a></li>
        <form action="{{ route('profesores.destroy', ['profesor' => $profesor->id]) }}" 
        method="POST" style = "display: inline-block">
        @method('delete')
        @csrf
        <input class="btn btn-danger" type="submit" value="Delete">
</form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
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

