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

        @include('user.columnas.webcam')

        @include('user.columnas.control')

        @include('user.columnas.leyendas')

        </div>

    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
