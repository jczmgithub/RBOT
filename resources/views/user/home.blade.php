@extends('layouts.default')

@section('huecoNav')

    @auth
        <li><a href="/home">Controles</a></li>
    @endauth

@endsection

@section('home')

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

    <div id="panelControl" class="container">

        <div class="row">

            <div class="col-sm-4">

                <h3>Webcam</h3>

                <div class="embed-responsive embed-responsive-16by9">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y5Q_xjJQmBE"
                            frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
                    </iframe>

                </div>

                <div id="divMando">

                    <h3>Mando</h3>

                    <img id="mando" src="/img/mando.png" class="img-responsive" alt="Mando robot">

                </div>

            </div>

            <div class="col-sm-4">

                <h3>Controles</h3>

                <div id="controles">

                <form action="/">

                    <select class="form-control selector">

                        <option value="">--Seleccione el Robot--</option>
                        <option value="robot1">Robot1</option>
                        <option value="robot2">Robot2</option>
                        <option value="robot3">Robot3</option>

                    </select>

                    <select class="form-control selector" id="selecMotor">

                        <option value="">--Seleccione el motor--</option>
                        <option value="motor1">Base</option>
                        <option value="motor2">Hombro</option>
                        <option value="motor3">Brazo</option>
                        <option value="motor4">Codo</option>
                        <option value="motor5">Muñeca</option>
                        <option value="motor6">Mano</option>

                    </select>

                    <h5>Velocidad:</h5>

                </form>

                </div>

            </div>

            <div class="col-sm-4">

                <h3>Robot</h3>

            </div>

        </div>

    </div>

    {!! HTML::style('css/user/home.css') !!}
    {!! HTML::script('js/user/home.js'); !!}
@stop
