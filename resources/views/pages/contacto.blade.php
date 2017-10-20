@extends('layouts.default')
@section('home')
<div class="container">
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
    <h2>Contacto</h2>
    <form class="form-horizontal" action="contacto" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Introduce email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="mensaje">Contenido:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Contenido del mensaje"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
        </div>
    </form>
</div>




@stop