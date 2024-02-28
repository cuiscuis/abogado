@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Editar expediente {{ $expediente->id }}</h1>

  <form action="{{ route('admin.expedientes.update', $expediente) }}" method="post">
    @csrf
    @method('put')

    <div class="mb-3">
      <label for="demandante" class="form-label">Demandante</label>
      <input type="text" class="form-control" id="demandante" name="demandante" value="{{ $expediente->demandante }}">
    </div>

    <div class="mb-3">
      <label for="demandado" class="form-label">Demandado</label>
      <input type="text" class="form-control" id="demandado" name="demandado" value="{{ $expediente->demandado }}">
    </div>

    <div class="mb-3">
      <label for="año" class="form-label">Año</label>
      <input type="number" class="form-control" id="año" name="año" value="{{ $expediente->año }}">
    </div>

    <div class="mb-3">
      <label for="detalles" class="form-label">Detalles</label>
      <textarea class="form-control" id="detalles" name="detalles">{{ $expediente->detalles }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
@endsection


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop