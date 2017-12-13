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

            <div class="col-md-4">

                <h3>Webcam</h3>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y5Q_xjJQmBE"
                            frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
                    </iframe>

                </div>
                <div id="divMando">
                <img id="mando" src="/img/mando.png" class="img-responsive" alt="Mando robot">
                </div>

            </div>

            <div id="controles">

                <h3>Controles</h3>

                <form action="/">

                    <fieldset>

                        Motor 1:
                        <br><input type="number" name="motor1" value=""><br>
                        Motor 2:
                        <br><input type="number" name="Motor2" value=""><br>
                        Motor 3:
                        <br><input type="number" name="Motor3" value=""><br>
                        Motor 4:
                        <br><input type="number" name="motor4" value=""><br>
                        Motor 5:
                        <br><input type="number" name="Motor5" value=""><br>
                        Motor 6:
                        <br><input type="text" name="Motor6" value=""><br>

                        <br><input type="submit" value="Enviar Datos">
                        
                    </fieldset>

                </form>

            </div>

        </div>
        <br>
    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
