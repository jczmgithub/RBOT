@extends('layouts.default')
@section('home')
    <div id="main">
        <div class="contenido container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Contacto</h3></div>
                        <div class="panel-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <strong>Error! </strong> {{ $error }}
                                            </div>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            <form class="form-horizontal" method="POST" action="contacto">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-4" for="nombre">Nombre:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4" for="email">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" placeholder="Introduce email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="mensaje">Contenido:</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Contenido del mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-rbt">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop