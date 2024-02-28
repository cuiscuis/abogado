@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1>Lista de usuarios</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Roles</th>
          <th>Permisos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>juan.perez@correo.com</td>
          <td>Administrador</td>
          <td>
            <ul>
              <li>Crear usuarios</li>
              <li>Eliminar usuarios</li>
              <li>Editar usuarios</li>
              <li>Ver todos los expedientes</li>
              <li>Crear expedientes</li>
              <li>Editar expedientes</li>
              <li>Eliminar expedientes</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>María González</td>
          <td>maria.gonzalez@correo.com</td>
          <td>Usuario</td>
          <td>
            <ul>
              <li>Ver sus propios expedientes</li>
              <li>Crear expedientes</li>
              <li>Editar sus propios expedientes</li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop