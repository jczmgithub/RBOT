@extends('layouts.default')

@section('huecoNav')
    <li ><a href="#seccionbrazo">Características</a></li>
    <li ><a href="#servicios">Servicios</a></li>
    <li ><a href="#contacto">Contacto</a></li>
@stop

@section('home')

    <div class="container-fluid text-center" id="inicio">
        <div id="descripcion">
            <h1>eivneesnse</h1>
        </div>
    </div>


    <div id="seccionbrazo" class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-6">

                <h1>Movilidad</h1>
                <p>Maneja tu brazo robot desde cualquier lugar.</p>

                <h1>Usabilidad</h1>
                <p>Interfaz amigable para un máximo control.</p>

                <h1>Eficiencia</h1>
                <p>Ahorra tiempo y trabajo.</p>

                <h1>User experience</h1>
                <p>¡Disfruta de nustra aplicación web!</p>

            </div>
            <div class="col-lg-6">
                <img style="margin: auto" src="/img/rbx4.png" class="img-responsive" alt="Mano robot">
            </div>
        </div>

    </div>

    <div class="container" id="servicios">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Servicios disponibles en RBOT.</h3>
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
        <div class="contenido container">
            <div class="row" id="contacto">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Contacto</h3></div>
                        <div class="panel-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <strong>Error! </strong> {{ $error }}
                                            </div>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="contacto">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-4" for="nombre">Nombre:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4" for="email">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" placeholder="Introduce email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="mensaje">Contenido:</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Contenido del mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-rbt">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop