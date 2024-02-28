@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


    <div class="container">
        <h1>Expediente {{ $expediente->id }}</h1>
      
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">{{ $expediente->demandante }} vs {{ $expediente->demandado }}</h5>
            <p class="card-text">
              <strong>Año:</strong> {{ $expediente->año }}<br>
              <strong>Detalles:</strong> {{ $expediente->detalles }}
            </p>
          </div>
        </div>
      
        <div class="card">
          <div class="card-header">Fotos</div>
          <div class="card-body">
            <div class="row">
              {{-- @foreach ($expediente->fotos as $foto)
                <div class="col-md-4">
                  <img src="{{ asset('storage/' . $foto->ruta) }}" class="img-fluid mb-3" alt="{{ $foto->descripcion }}">
                </div>
              @endforeach --}}
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