@extends('layouts.default')

@section('huecoNav')
    <li ><a href="#seccionbrazo">Características</a></li>
    <li ><a href="#servicios">Servicios</a></li>
    <li ><a href="#contenedorContacto">Contacto</a></li>
@stop

@section('home')

    <div class="container-fluid text-center" id="inicio">
            <h1 id="titulo" class="retroshadow">RBOT<h2 id="descripcion">control service</h2></h1>

            <p><button type="submit" class="btn-lg btn-rbt ">Registrar</button></p>

    </div>
    <div id="seccionbrazo" class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-6">

                <h1>Movilidad</h1>
                <p>Maneja tu brazo robot desde cualquier lugar.</p>

                <h1>Usabilidad</h1>
                <p>Interfaz amigable para un máximo control.</p>

                <h1>Eficiencia</h1>
                <p>Ahorra tiempo y trabajo.</p>

                <h1>User experience</h1>
                <p>¡Disfruta de nustra aplicación web!</p>

            </div>
            <video id="videoRobot" class="embed-responsive-item col-lg-6 col-xs-12 col-sm-6"  loop autoplay muted >
                <source src="robotexample.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>

    <div class="container" id="servicios">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Tarifas</h4>
                <p class="text-muted">Posibilidad de contratar distintas tarifas.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Aplicación Web</h4>
                <p class="text-muted">Funcionalidad para programar y utilización del robot vía web.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Web Segura</h4>
                <p class="text-muted">Uso de certificados de seguridad.</p>
            </div>
        </div>
    </div>

    <div id="contenedorContacto">
            <div class="col-md-8 col-md-offset-2 container">
                <h1>CONTACTO</h1>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form class="form-horizontal    " method="POST" action="contacto" >
                    {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('Nombre:') !!}
                    {!! Form::text('nombre', null,
                        array(
                              'class'=>'form-control',
                              'name'=>'nombre',
                              'placeholder'=>'Introduce tu nombre')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('E-mail:') !!}
                    {!! Form::text('email', null,
                        array(
                              'class'=>'form-control',
                              'name'=>'email',
                              'placeholder'=>'Introduce tu correo')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Mensaje:') !!}
                    {!! Form::textarea('mensaje', null,
                        array('class'=>'form-control',
                              'name'=>'mensaje',
                              'placeholder'=>'Contenido del mensaje')) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Contactáctanos!',
                      array('class'=>'btn btn-rbt')) !!}
                </div>
                </form>
            </div>
    </div>
    {!! HTML::style('css/home.css') !!}
@stop