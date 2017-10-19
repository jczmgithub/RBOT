@extends('frontend.layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>RBOT - DomoTek</h1>
            <p>Un servicio de control para un brazo robot.</p>
            <p><a class="btn btn-primary btn-lg" href="contact" role="button">Contáctanos &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>RBX1</h2>
                <p>El RBX1 (también conocido como Remix) es un brazo de robot impreso de 6 ejes 3D. El robot se construye utilizando solo una impresora 3D sin componentes mecanizados. También usa solo un Raspberry Pi y nuestro nuevo controlador de motor paso a paso SlushEngine Model D 7 para controlar el robot. No se requiere una computadora externa.</p>
                <p><a class="btn btn-default" href="#" role="button">Detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Control por botones</h2>
                <p>El brazo robótico puede ser controlado por funciones añadidas a botones. Añade nuevas funciones, modifica las existentes y elimina las inútiles.</p>
                <p><a class="btn btn-default" href="#" role="button">Detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Control manual</h2>
                <p>El brazo robótico también se puede controlar mediante un mando de la Xbox</p>
                <p><a class="btn btn-default" href="#" role="button">Detalles &raquo;</a></p>
            </div>
        </div>

        <hr>
@endsection