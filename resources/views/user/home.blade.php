@extends('layouts.default')
@section('home')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="zekton" id="titulo">RBOT</h1>
            <p class="zekton" id="subtitulo">Un servicio de control para un brazo robot.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in, User!
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail seccion">
                    <h2>RBX1</h2>
                    <p>El RBX1 (también conocido como Remix) es un brazo de robot impreso de 6 ejes 3D. El robot se construye utilizando...</p>
                    <p class="caption"><a class="btn btn-primary" href="RBX1" role="button">Ver Robot &raquo;</a></p>
                </div></div>
            <div class="col-md-4">
                <div class="thumbnail seccion  ">
                    <h2>Control por funciones</h2>
                    <p>El brazo robótico puede ser controlado por secuencias. Mueve los ejes y crea tu secuencia de movimientos. </p>
                    <p class="caption"><a class="btn btn-warning" href="controlBotones.blade.php" role="button">Ver control <span class="glyphicon glyphicon-console"></span></a></p>
                </div></div>
            <div class="col-md-4">
                <div class="thumbnail seccion">
                    <h2>Control manual</h2>
                    <p>El brazo robótico también se puede controlar mediante un mando de consola. ¡Un mando Xbox para controlar motores!</p>
                    <p class="caption"><a class="btn btn-warning" href="#" role="button">Ver control manual <i class="fa fa-gamepad" aria-hidden="true"></i></a></p>
                </div>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9 text-center" >
            <iframe width="1024" height="480" src="https://www.youtube.com/embed/QTmILKjmvlk?rel=0&amp;start=160" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <br/>

@stop
