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

        @include('user.columnas.ayudasVisuales')

        @include('user.columnas.controlInterfaz')

        </div>

    </div>

    {!! HTML::style('css/user/home.css', array(), true) !!}
    {!! HTML::script('js/user/home.js', array(), true); !!}

@stop
