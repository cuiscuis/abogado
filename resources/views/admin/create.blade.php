@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Crear Expediente</div>

              <div class="card-body">
                  <form action="{{ route('admin.expedientes.store') }}" method="POST">
                      @csrf

                      <div class="form-group">
                          <label for="demandante">Demandante</label>
                          <input type="text" name="demandante" id="demandante" class="form-control" value="{{ old('demandante') }}">
                      </div>

                      <div class="form-group">
                          <label for="demandado">Demandado</label>
                          <input type="text" name="demandado" id="demandado" class="form-control" value="{{ old('demandado') }}">
                      </div>

                      <div class="form-group">
                          <label for="año">Año</label>
                          <input type="number" name="año" id="año" class="form-control" value="{{ old('año') }}">
                      </div>

                      <div class="form-group">
                          <label for="detalles">Detalles</label>
                          <textarea name="detalles" id="detalles" class="form-control">{{ old('detalles') }}</textarea>
                      </div>

                      <button type="submit" class="btn btn-primary">Crear Expediente</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop