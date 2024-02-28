@extends('layouts.layoud')

@section('title', 'Contacto')
    
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid bgcontac-page-header" style=" margin-bottom: 50px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
                <h3 class="display-3 text-white text1">Contactanos</h3>
                <div class="d-inline-flex text-white">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="text-center pb-2">
        <h1 class="mb-4 text1">Contactanos para cualquier consulta</h1>
    </div>
    <!-- Contact Start -->
    <div class="container-fluid py-5 " style="background-color: #4141411f ">
        <div class="container py-5">
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Tu Nombre" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Tu Correo Electronico" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Tu Telefono Celular" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Motivo" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btnsend btnsend-primary btnsend-block" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d239.1020514246465!2d-68.13374845755428!3d-16.494119650230203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1708629676894!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <div class="imagenes">
        <img src="/img/d1.jpg" alt="Imagen 1">
        <img src="/img/d2.jpg" alt="Imagen 2">
        <img src="/img/d1.jpg" alt="Imagen 3">
      </div>
      
@endsection