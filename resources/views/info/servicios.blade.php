@extends('layouts.layoud')

@section('title', 'Servicios')
    
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bgcontac-page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class=" text-white text1 " style="font-size: 50px  ">Servicios </h3>
            <div class="d-inline-flex text-white">
                
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/carr1.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Enfrentamos tus desafíos legales con éxito</h1>
                <p class="animated fadeInRight">Protegemos tus intereses con pasión y compromiso</p>
                <a class="btn animated fadeInUp" href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank">Consulta Gratuita</a>
            </div>
        </div>
  
        <div class="carousel-item">
            <img src="/img/carr2.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Tranquilidad en tus manos</h1>
                <p class="animated fadeInRight">Tu aliado legal de confianza Saavedra & Asociados: Experiencia y resultados</p>
                <a class="btn animated fadeInUp" href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank">Consulta Gratuita</a>
            </div>
        </div>
  
        <div class="carousel-item">
            <img src="/img/carr3.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">No te arriesgues, elige la tranquilidad</h1>
                <p class="animated fadeInRight">Un equipo de profesionales a tu serviciote acompañara en cada paso del camino.</p>
                <a class="btn animated fadeInUp" href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank">Consulta Gratuita</a>
            </div>
        </div>
    </div>
  
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel End -->

  

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header">
            <h2 class="text2" style="font-size: 50px; text-align: center; padding-bottom: 25px" >Nuestras Areas</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-landmark "></i>
                    </div>
                    <h3 class="text2">Area Civil</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3 class="text2">Area Familiar</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h3 class="text2">Area Laboral</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h3 class="text2">Area Penal</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h3 class="text2">Area Administrativo</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h3 class="text2">Tramites en Gral.</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!--
<div class="card">
    {{-- contenedor de todas las tarjetas  --}}
    <div class="container text-center b">
        <div class="row accordion " id="accordionPanelsStayOpenExample">
        <div class="col-sm">
                    {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDos" aria-expanded="false" aria-controls="panelsStayOpen-collapseDos">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseDos" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
                    {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTres" aria-expanded="false" aria-controls="panelsStayOpen-collapseTres">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTres" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        </div> 
        
    </div>

    {{-- contenedor de todas las tarjetas  --}}
    <div class="container text-center b">
        <div class="row accordion " id="accordionPanelsStayOpenExample">
        <div class="col-sm">
                    {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDos" aria-expanded="false" aria-controls="panelsStayOpen-collapseDos">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseDos" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
                    {{-- acordeon con idependiente dentro del columna --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTres" aria-expanded="false" aria-controls="panelsStayOpen-collapseTres">
                    Accordion Item #2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTres" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        </div> 
        
    </div>



</div>
-->
@endsection