@extends('layouts.defaultAdmin')

@section('huecoNav')
    <li><a href="#" onclick="openNav()">Menu</a></li>
@endsection

@section('home')

    @include('layouts.aside')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Aitor Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in, Admin!
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="CrearUsu" class="tabcontent">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
            </div>

            <div id="ModificarUsu" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
            </div>

            <div id="BorrarUsu" class="tabcontent">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div>
        </div>

    </div>

@endsection

