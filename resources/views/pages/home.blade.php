<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 5/10/17
 * Time: 10:23
 */
?>
@extends('layouts.default')
@section('home')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="zekton" id="titulo">RBOT - DomoTek</h1>
            <p id="titulo">Un servicio de control para un brazo robot.</p>
        </div>
    </div>

    <div class="container ">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                <h2>RBX1</h2>
                <p>El RBX1 (también conocido como Remix) es un brazo de robot impreso de 6 ejes 3D. El robot se construye utilizando...</p>
                <p class="caption"><a class="btn btn-primary" href="RBX1" role="button">Detalles &raquo;</a></p>
            </div></div>
            <div class="col-md-4">
                <div class="thumbnail">
                <h2>Control por funciones</h2>
                <p>El brazo robótico puede ser controlado por funciones añadidas a botones. Añade nuevas funciones, modifica las existentes y elimina las inútiles.</p>
                <p class="caption"><a class="btn btn-warning" href="controlBotones.blade.php" role="button">Detalles <span class="glyphicon glyphicon-console"></span></a></p>
                </div></div>
            <div class="col-md-4">
                <div class="thumbnail">
                <h2>Control manual</h2>
                <p>El brazo robótico también se puede controlar mediante un mando de consola. ¡Un mando Xbox para controlar motores!</p>
                <p class="caption"><a class="btn btn-warning" href="#" role="button">Detalles <i class="fa fa-gamepad" aria-hidden="true"></i></a></p>
            </div>
            </div>
        </div>
    </div>
    <br/>
@stop