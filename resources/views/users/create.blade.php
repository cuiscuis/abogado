@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1>Crear usuario</h1>
    <form action="crear_usuario.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario">
      </div>
      <div class="form-group">
        <label for="correo">Correo electrónico:</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo electrónico del usuario">
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña:</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese la contraseña del usuario">
      </div>
      <div class="form-group">
        <label for="rol">Rol:</label>
        <select class="form-control" id="rol" name="rol">
          <option value="">Seleccione un rol</option>
          <option value="Administrador">Administrador</option>
          <option value="Usuario">Usuario</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Crear usuario</button>
    </form>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop