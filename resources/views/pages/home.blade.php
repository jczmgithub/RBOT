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
        <div id="infos">
        <!-- Example row of columns -->
        <div class="row text-center">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>RBX1</h3>
                    </div>
                    <div class="panel-body">
                        El RBX1 (también conocido como Remix) es un brazo de robot impreso de 6 ejes 3D. El robot se construye utilizando...</p>
                        <p class="caption"><a class="btn btn-rbt btn-lg btn-block" href="RBX1" role="button">Detalles &raquo;</a></p>
                    </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Control por funciones</h3>
                </div>
                <div class="panel-body">
                    El brazo robótico puede ser controlado por secuencias. Mueve los ejes y crea tu secuencia de movimientos.<p/>
                    <p class="caption"><a class="btn btn-rbt btn-lg btn-block" href="controlBotones.blade.php" role="button">Detalles <span class="glyphicon glyphicon-console"></span></a></p>
                </div>
            </div>
        </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Control manual</h3>
                    </div>
                    <div class="panel-body">
                El brazo robótico también se puede controlar mediante un mando de consola. ¡Un mando Xbox para controlar motores!<p/>
                <p class="caption"><a class="btn btn-rbt btn-lg btn-block" href="#" role="button">Detalles <i class="fa fa-gamepad" aria-hidden="true"></i></a></p>
                    </div>
                </div>
        </div>
        </div>
        </div>
        <div id="videoSeccion">
        <div id=videoYoutube class="embed-responsive embed-responsive-16by9 text-center" >
            <iframe width="1024" height="480" src="https://www.youtube.com/embed/QTmILKjmvlk?rel=0&amp;start=160" frameborder="0" allowfullscreen></iframe>
        </div>
        </div>
    </div>
    <br/>
    </div>



@stop