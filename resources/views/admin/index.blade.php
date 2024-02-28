@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

  <div class="container-fluid">
    <h1>Expedientes</h1>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Demandante</th>
          <th>Demandado</th>
          <th>Año</th>
          <th>Detalles</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($expedientes as $expediente)
          <tr>
            <td>{{ $expediente->id }}</td>
            <td>{{ $expediente->demandante }}</td>
            <td>{{ $expediente->demandado }}</td>
            <td>{{ $expediente->año }}</td>
            <td>{{ $expediente->detalles }}</td>
            <td>
              <a href="{{ route('admin.expedientes.show', $expediente) }}" class="btn btn-primary">Ver</a>
              <a href="{{ route('admin.expedientes.edit', $expediente) }}" class="btn btn-warning">Editar</a>
              <form action="{{ route('admin.expedientes.destroy', $expediente) }}" method="post">
                @csrf
                @method('delete')
              
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/N4W1ZXkXlPWN03BOHiwmy8Q32+XvZX/m0T7b" crossorigin="anonymous"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop