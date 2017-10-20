<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>
<div class="container">
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
@if(Session::get('errors'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5>Han habido errores:</h5>
        @foreach($errors->all('<li>:message</li>') as $message)
            {{$message}}
        @endforeach
    </div>
    @endif
</div>
</body>
@include('includes.footer')
</html>