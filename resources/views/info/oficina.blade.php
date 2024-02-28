@extends('layouts.layoud')

@section('title', 'Oficina')
    
@section('content')

 <!-- Page Header Start -->
<div class="container-fluid bgcontac-page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class=" text-white text1 " style="font-size: 50px  ">Oficina </h3>
            <div class="d-inline-flex text-white">
                
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class=" text-black text1 " style="font-size: 50px  ">Visita Guiada en Video </h3>
            <div class="d-inline-flex text-white">
                
            </div>
        </div>



<div class="tarjeta" >
    <div class="video-container">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/R6EIsu8zjAs" title="Como llegar a Saavedra &amp; Asociados" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="contenido">
      {{-- <h3 class="titulo text1">Título de la tarjeta</h3>
      <p>Descripción breve de la tarjeta</p> --}}
      <div class="horarios">
        <h4 class="subtitulo text1">Horarios de atención:</h4>
        <ul class="horarios1">
            <li>
              <span class="dia">Lunes:</span>
              <span class="horario">8:00 a 15:00</span>
            </li>
            <li>
              <span class="dia">Martes:</span>
              <span class="horario">8:00 a 15:00</span>
            </li>
            <li>
              <span class="dia">Miércoles:</span>
              <span class="horario">8:00 a 15:00</span>
            </li>
            <li>
              <span class="dia">Jueves:</span>
              <span class="horario">8:00 a 15:00</span>
            </li>
            <li>
              <span class="dia">Viernes:</span>
              <span class="horario">8:00 a 15:00</span>
            </li>
            <li>
              <span class="dia">Sábado:</span>
              <span class="horario">Cerrado</span>
            </li>
            <li>
              <span class="dia">Domingo:</span>
              <span class="horario">Cerrado</span>
            </li>
          </ul>
          
      </div>
      <div class="ubicacion">
        <h4 class="subtitulo text1">¿Cómo llegar?</h4>
        <p class="dia">
          **Dirección:** Calle Falsa 123, Ciudad, País.
          <br>
          **Teléfono:** +54 11 1234 5678
          <br>
          **Email:** info@ejemplo.com
        </p>
      </div>
    </div>
  </div>
  
@endsection