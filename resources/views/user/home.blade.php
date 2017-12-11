@extends('layouts.default')

@section('home')

    <div class="container">
        <!-- Example row of columns -->
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in, User!
        </div>
    </div>

    {!! HTML::style('css/user/home.css') !!}

@stop
