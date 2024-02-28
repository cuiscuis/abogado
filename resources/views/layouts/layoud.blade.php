<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
   
   <!-- CSS Libraries -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="lib/animate/animate.min.css" rel="stylesheet">
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="/css/style1.css" rel="stylesheet">
</head>
<body>

  {{-- menu cabecera --}}

  <div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="#">
                            <h1></h1>
                            <img src="/img/logoletras1.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="top-bar-right">
                        <div class="text">
                            <h2>8:00 - 15:00</h2>
                            <p>Atencion de Lun - Vier</p>
                        </div>
                        <a href="https://wa.me/+59176211442?text=Hola,%20tengo%20una%20consulta%20con%20respecto%20a:" target="_blank" class="numhover">
                            <div class="text">
                                <h2>67303258</h2>
                                <p>Numero de consulta</p>
                            </div>
                        </a>
                        
                        <div class="social">
                            <a href="https://twitter.com/SaaveAsocia"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61557003531439&is_tour_completed=true"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/saavedra-asociados-3373392b7/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/saavedrasociados/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        <a href="/reconocimientos" class="nav-item nav-link">Acerca de Nosotros</a>
                        <a href="/servicios" class="nav-item nav-link">Servicios</a>
                        <a href="/oficina" class="nav-item nav-link">Oficinas</a>
                        <a href="/contacto" class="nav-item nav-link">Contacto</a>
                        
                        {{-- <a href="contact.html" class="nav-item nav-link">preguntas frecuentes</a> --}}
                    </div>
                    <div class="ml-auto">
                        {{-- <a class="btn" href="/login">Inicar Sesion</a> --}}
                        <a href="/login " class="btn"> Iniciar Sesion</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    {{-- temirna menu --}}
    <div>
      @yield('content')
    </div>
    <!-- Footer Start -->
    <div class="footer">
      <div class="container">
          <div class="row">
              
              <div class="col-md-6 col-lg-8">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Atendemos:</h2>
                            <a href="/contacto">Civil</a>
                            <a href="/contacto">Penal</a>
                            <a href="/contacto">Familiar</a>
                            <a href="/contacto">Administrativo</a>
                            <a href="/contacto">Tramites en Gral.</a>
                        </div>
                    </div>
              <div class="col-md-6 col-lg-4">
                  <div class="footer-link">
                      <h2>Paginas</h2>
                      <a href="/reconocimientos">Acerca de Nosotros</a>
                      <a href="/servicios">Servicios</a>
                      <a href="/oficina">Oficinas</a>
                      <a href="/contacto">Contacto</a>
                      {{-- <a href="">Preguntas Frecuentes</a> --}}
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="footer-contact">
                      <h2>Ubicacion</h2>
                      <p><i class="fa fa-map-marker-alt"></i>calle yanachoca jajajaja</p>
                      <p><i class="fa fa-phone-alt"></i>78757479</p>
                      <p><i class="fa fa-envelope"></i>correo@hotmail.jaja</p>
                      <div class="footer-social">
                          <a href="https://twitter.com/SaaveAsocia"><i class="fab fa-twitter"></i></a>
                          <a href="https://www.facebook.com/profile.php?id=61557003531439&is_tour_completed=true"><i class="fab fa-facebook-f"></i></a>
                          <a href="https://www.youtube.com/channel/UCCOCe0rErhSu4dI86bOu0Qg"><i class="fab fa-youtube"></i></a>
                          <a href="https://www.instagram.com/saavedrasociados/"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.linkedin.com/in/saavedra-asociados-3373392b7/"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </div>
      <div class="container footer-menu">
          
      </div>
      <div class="container copyright">
          <div class="row">
              <div class="col-md-6">
                  <p>Todos los derechos reservados jaja.corporation</p>
              </div>
              
          </div>
      </div>
  </div>
  <!-- Footer End -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

    
  <script src="js/main.js"></script>
</body>
</html></html>