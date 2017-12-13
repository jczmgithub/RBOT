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

            <div id="controles" class="container">

                <div class="row">

                <h3>Controles</h3>

                <form action="/">

                    <fieldset>

                        <div class="col-md-4">

                            <h4>Motor 1:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos1" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad1" value="0"><br>

                        </div>

                        <div class="col-md-4 ">

                            <h4>Motor 2:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos2" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad2" value="0"><br>

                        </div>

                        <div class="col-md-4 ">

                            <h4>Motor 3:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos3" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad3" value="0"><br>

                        </div>

                        <div class="col-md-4 ">

                            <h4>Motor 4:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos4" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad4" value="0"><br>

                        </div>

                        <div class="col-md-4 ">

                            <h4>Motor 5:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos5" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad5" value="0"><br>

                        </div>


                        <div class="col-md-4 ">

                            <h4>Motor 6:</h4>

                            Pasos:
                            <br><input type="number" name="Pasos6" value="0"><br>
                            Velocidad
                            <br><input type="number" name="Velocidad6" value="0"><br>

                        </div>


                    </fieldset>

                </form>

            </div>
            </div>
        </div>
        <br>
    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
