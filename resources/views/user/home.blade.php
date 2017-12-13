@extends('layouts.default')

@section('huecoNav')

    @auth
        <li><a data-toggle="tab" href="#menu1">Control por Botones</a></li>
        <li><a data-toggle="tab" href="#menu2">Control Manual</a></li>
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
            <div class="col-md-6">

                <h3>Webcam</h3>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y5Q_xjJQmBE"
                            frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
                    </iframe>
                </div>

            </div>

            <div class="col-md-6">

                <div class="tab-content">

                    <div id="menu1" class="tab-pane fade in active">
                        <h3>Control por Botones</h3>

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Control Manual</h3>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="estado">



    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
