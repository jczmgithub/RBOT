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

    {!! HTML::style('css/user/home.css') !!}

@stop
