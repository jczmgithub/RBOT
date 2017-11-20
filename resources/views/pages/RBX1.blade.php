@extends('layouts.default')
@section('home')


    <div id="infoRBX" class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    Información Sobre RBX1:
                </h2>
            </div>
            <div class="panel-body">

                <h4>
                    El RBX1 (también conocido como Remix) es un brazo de Robot de 6 ejes impreso en 3D. El robot está construido
                    usando solo una impresora 3D sin componentes mecanizados. También utiliza solo un Raspberry Pi y nuestro nuevo
                    controlador de motor paso a paso SlushEngine Modelo D 7 para controlar el robot. No se requiere una computadora
                    externa.
                </h4>
                <h4>
                    Le proporcionamos este kit de creación usted mismo para que pueda armar este robot y realmente darle a su impresora
                    3D en casa un proyecto desafiante. Esencialmente, todo lo que necesita es una impresora 3D y una Raspberry Pi;
                    proporcionamos el resto de los componentes junto con documentos de montaje y programación.
                </h4>

                <h4>
                    <p>INCLUYE:</p>
                    <li>7 motores paso a paso de NEMA23 a NEMA14</li>
                    <li>Un servomotor para la pinza</li>
                    <li>Correas dentadas y poleas (5 correas y 5 poleas)</li>
                    <li>Ejes y acopladores para mecanismos internos</li>
                    <li>Todos los cojinetes de articulación y los cojinetes tensores</li>
                    <li>Todos los sujetadores y herramientas básicas necesarios para el ensamblaje</li>
                    <li>Cableado (premontado con los motores)</li>
                    <li>Controlador de motor SlushEngine Modelo D</li>
                    <li>Fuente de alimentación</li>
                    <li>Tarjeta SD de arranque con imagen de Raspberry Pi y todo el software requerido</li>
                    <li>Controlador / enseñar colgante</li>
                    <li>Archivo 3D Cad y videos de la guía de montaje</li>
                </h4>
            </div>
        </div>

        <div id="galeriaRBX">

            <div class="gallery">
                <figure>
                    <img src="img/rbx1.png" alt="" />
                </figure>
                <figure>
                    <img src="img/rbx2.png" alt="" />
                </figure>
                <figure>
                    <img src="img/rbx3.png" alt="" />
                </figure>
                <figure>
                    <img src="img/rbx4.png" alt="" />
                </figure>
                <figure>
                    <img src="img/rbx5.jpg" alt="" />
                </figure>
                <figure>
                    <img src="img/rbx6.jpg" alt="" />
                </figure>
            </div>

        </div>
    </div>
@stop
