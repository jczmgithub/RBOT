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

        @include('user.columnas.webcam_mando')

        @include('user.columnas.control', ['modelos' => DB::table('robot')->get()])

        @include('user.columnas.robot')

        </div>

    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
