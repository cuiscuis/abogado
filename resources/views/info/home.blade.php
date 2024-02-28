@extends('layouts.layoud')

@section('title', 'home')
    
@section('content')
{{-- crousel --}}

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

  <!-- informacion general -->

  <!-- About Start -->
  <div class="container-fluid py-1" style="background-color: #41414110">
    <div class="container py-5" >
        <div class="row">
            <div class="col-lg-5">
                <img class="img-fluid rounded" src="/img/abg1.jpg" alt="">
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <h2 class="position-relative text-center bg-white text-primary1 rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 380px; margin-left: -205px;">25 Años de Experiencia</h2>
                <h1 class="mb-4 text2">Tu mejor aliado legal</h1>
                <p>En Saavedra y Asociados, creemos que la justicia es un derecho fundamental para todos. Por eso, nos apasiona defender los intereses de nuestros clientes con tenacidad, integridad y un profundo conocimiento de la ley. <br> <br> 

                    Somos un equipo de abogados altamente especializados y con amplia experiencia en diversas áreas del derecho. A lo largo de nuestra trayectoria, hemos obtenido resultados exitosos para nuestros clientes, incluso en casos complejos. <br> <br> 
                    
                    Nos distinguimos por nuestro enfoque personalizado y nuestra atención al detalle. Nos involucramos en cada caso con pasión y compromiso, brindando a nuestros clientes la mejor representación legal posible. <br>   <br></p>
                <a href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank" class="btnEspecial ">Contactanos</a>
            </div>
        </div>
    </div>
  </div>

  <div class="container-fluid py-1 " style="background-color: #f5f5dc31" >
    <div class="container py-5" >
        <div class="row">
           
            <div class="col-lg-7 mt-4 mt-lg-0" >
                <h2 class="position-relative text-center bg-white text-primary1 rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 380px; margin-left: 295px;">25 Años de Experiencia</h2>
                <h1 class="mb-4 text2" >Evita riesgos legales</h1>
                <p>En el complejo mundo legal, navegar sin la guía adecuada puede exponerte a riesgos innecesarios.</p>

<p> En Saavedra & Asociados, te ayudamos a prevenir problemas legales y proteger tus intereses. Contamos con un equipo especializado en diversas áreas del derecho, capaz de identificar y anticipar los riesgos que te pueden afectar.</p>

<p>Te ofrecemos una amplia gama de servicios legales preventivos:</p><ul>
    <li>Asesoramiento legal personalizado: Te ayudamos a comprender la ley y sus implicaciones en tu caso particular.</li>
    <li>Análisis de riesgos legales: Evaluamos tu situación y te identificamos los potenciales riesgos legales que te acechan.</li>
    <li>Diseño de estrategias preventivas: Implementamos estrategias legales a medida para minimizar los riesgos y proteger tus intereses.</li>
    <li>Redacción de contratos y documentos legales: Te ayudamos a redactar documentos legales claros y seguros que te protejan en el futuro.</li>
    <li>Negociaciones estratégicas: Te representamos en negociaciones con otras partes, velando por tus intereses y derechos.</li>
  </ul>
  <br>
  


                <a href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank" class="btnEspecial ">Contactanos</a>
            </div>
            <div class="col-lg-5">
              <img class="img-fluid rounded" src="/img/abg3.jpg" alt="">
              
          </div>
        </div>
    </div>
  </div>

  <div class="container-fluid py-1"style="background-color: #41414115">
    <div class="container py-5" >
        <div class="row">
            <div class="col-lg-5">
                <img class="img-fluid rounded" src="/img/abg2.jpg" alt="">
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <h2 class="position-relative text-center bg-white text-primary1 rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 380px; margin-left: -205px;">25 Años de Experiencia</h2>
                <h1 class="mb-4 text2" text2>Tranquilidad y confianza</h1>
                <p>En Saavedra & Asociados, comprendemos que los asuntos legales pueden generar incertidumbre y preocupación. Por eso, nuestro objetivo principal es brindarte la tranquilidad y confianza que necesitas al enfrentar cualquier desafío legal. <br><br>

                    Más que un bufete de abogados, somos tu aliado estratégico. Un equipo de profesionales altamente especializados y comprometidos con tu bienestar, que te acompañará en cada paso del camino, brindándote la asesoría personalizada y eficaz que necesitas para alcanzar tus objetivos. <br> <br>
                    
                    Con Saavedra & Asociados, puedes estar seguro de que tus intereses estarán protegidos. <br><br> </p>
                <a href="https://wa.me/+59167303258?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank" class="btnEspecial ">Contactanos</a>
            </div>
        </div>
    </div>
  </div>


<!-- About End -->

{{-- porque escojernos --}}

 <!-- Features Start -->
 <div class="container-fluid py-5">
  <div class="container py-5">
      <div class="row">
          <div class="col-lg-6" style="min-height: 500px;">
              <div class="position-relative h-100 rounded overflow-hidden">
                  <img class="position-absolute w-100 h-100" src="/img/abogado1.jpg" style="object-fit: cover;">
              </div>
          </div>
          <div class="col-lg-6 pt-5 pb-lg-5">
              <div class="feature-text bg-white rounded p-lg-5">

                  <h1 class="mb-4 text2">¿Por Que Escogernos?</h1>
                  <div class="d-flex mb-4">
                      <div class="btn-lg-rounded px-3" style="border-radius: 50px;">
                          <h4 class=" m-0 btnEspecial">01</h4>
                      </div>
                      <div class="ml-4">
                          <h4 class="text2">Experiencia y Resultados</h4>
                          <p class="m-0">Contamos con un equipo de abogados altamente especializados y con amplia experiencia en diversas áreas del derecho. A lo largo de nuestra trayectoria, hemos obtenido resultados exitosos para nuestros clientes, incluso en casos complejos.</p>
                      </div>
                  </div>
                  <div class="d-flex mb-4">
                      <div class=" px-3" style="border-radius: 50px;">
                          <h5 class="btnEspecial m-0">02</h5>
                      </div>
                      <div class="ml-4">
                          <h4 class="text2">Compromiso y Atención Personalizada</h4>
                          <p class="m-0">Nos comprometemos con cada caso y brindamos atención personalizada a nuestros clientes. Mantenemos una comunicación constante y transparente con ellos para que se sientan informados y acompañados en todo el proceso legal.</p>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="btn1-primary btn-lg-square px-3" style="border-radius: 50px;">
                          <h5 class="btnEspecial m-0">03</h5>
                      </div>
                      <div class="ml-4">
                          <h4 class="text2">Honestidad y Confianza</h4>
                          <p class="m-0">Creemos en la importancia de la honestidad y la transparencia en la relación con nuestros clientes. Ofrecemos un servicio profesional y ético, basado en la confianza mutua</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Features End -->


{{-- fin de escogernos --}}
  

 
</div>
</div>
</div>
</div>
</div>
    
@endsection