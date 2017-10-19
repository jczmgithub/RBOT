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
    <div id="main">

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger fade in" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    <strong>Error: </strong>{{ $error }}
                </div>
            @endforeach
        </ul>
    </div>
@endif

<form action="formpost" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre">
    </div>
    <div class="form-group">
        <label for="nombre">Edad:</label>
        <input type="number" class="form-control" name="edad" placeholder="Introduce tu edad">
    </div>
    <p><input type="submit" /></p>
</form>
    </div>

    @include('includes.footer')

</div>
</body>
</html>