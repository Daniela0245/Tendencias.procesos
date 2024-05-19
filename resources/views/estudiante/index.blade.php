<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Estudiantes|Moodle</title>
  </head>
  <body>
  <x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Estudiante') }}
</h2>
</x-slot>
    <div class="container">

    <h1>Modulo de Estudiantes</h1>
    <a href=" {{route('estudiantes.create')}}" class="btn btn-success">Agregar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CARRERA</th>
      <th scope="col">SEMESTRE</th>
      <th scope="col">ESTADO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($estudiantes as $estudiante)
    <tr>
      <th scope="row">{{ $estudiante->id}}</th>
      <td>{{ $estudiante->nombre}}</td>
      <td>{{ $estudiante->apellido}}</td>
      <td>{{ $estudiante->cedula}}</td>
      <td>{{ $estudiante->direccion}}</td>
      <td>{{ $estudiante->telefono}}</td>
      <td>{{ $estudiante->email}}</td>
      <td>{{ $estudiante->carrera}}</td>
      <td>{{ $estudiante->semestre}}</td>
      <td>{{ $estudiante->estado}}</td>
      <td>
        <a href="{{ route('estudiantes.edit',['estudiante'=>$estudiante->id]) }}" class="btn btn-info"> Editar </a></li>
        <form action="{{ route('estudiantes.destroy', ['estudiante' => $estudiante->id]) }}"
        method='POST' style="display: inline-block">
        @method('delete')
        @csrf 
        <input class="btn btn-danger" type="submit" value="delete">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>

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