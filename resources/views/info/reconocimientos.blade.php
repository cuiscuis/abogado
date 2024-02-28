@extends('layouts.layoud')

@section('title', 'Reconocimientos')
    
@section('content')

<!-- Page Header Start -->
<div class="container-fluid bgcontac-page-header" style=" margin-bottom: 50px;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class=" text-white text1 " style="font-size: 50px  ">Acerca de Nosotros </h3>
            <div class="d-inline-flex text-white">
                
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

 <!-- About Start -->
 <div class="about" style="background-color: #f5f5dc33">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/carr1.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2 class="text1" style="font-size: 35px">Mision</h2>
                </div>
                <div class="about-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about" style="background-color: #41414115 ">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2 class="text1" style="font-size: 35px">Vision</h2>
                </div>
                <div class="about-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/carr1.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

{{-- texto perron --}}
<div class="contenido1">

    <svg width='600' height='200'>
        
    
        <text dominant-baseline='middle' text-anchor='middle' x='50%' y='50%' class="text1" style="font-size: 60px">
        Abogados
        </text>
    </svg>

    {{--  tarjetas de personal --}}

</div>


<div class="contenedor-imagenes" style="padding-bottom: 100px">
    <div class="imagen-izquierda">
      <img src="img/perfil2.png" alt="Imagen 1" class="imgGayZoom">
      <div class="texto-imagen text1">Dra. Carla S. Saavedra Delgado</div>
    </div>
    <div class="imagen-derecha">
      <img src="img/perfil1.png" alt="Imagen 2" class="imgGayZoom">
      <div class="texto-imagen text1">Dr. Marco Antonio Cala Jorge</div>
    </div>
  </div>


 <!-- Timeline Start -->
 <div class="timeline">
    <div class="container">
        <div class="section-header">
            <h2 class="text2" style="padding-bottom: 55px; padding-left: 200px; font-size: 50px">Tabajos importantes</h2>
            
        </div>
        <div class="timeline-start">
            <div class="timeline-container left">
                <div class="timeline-content">
                    <h2><span>2020</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="timeline-content">
                    <h2><span>2019</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
            <div class="timeline-container left">
                <div class="timeline-content">
                    <h2><span>2018</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="timeline-content">
                    <h2><span>2017</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
            <div class="timeline-container left">
                <div class="timeline-content">
                    <h2><span>2016</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="timeline-content">
                    <h2><span>2015</span>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timeline End -->
@endsection