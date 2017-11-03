<nav class="navbar navbar-default navbar-fixed-top arreglar-nav">

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img class="icon-bar" id="logo" src="/img/domotek-logo.png">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="/">Inicio</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Características
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="RBX1">Robot</a></li>
                        <li><a href="controlManual">Mando</a></li>
                        <li><a href="controlBotones">Funciones</a></li>
                    </ul>
                </li>
                <li><a href="contact">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" onclick="$('#entrar').modal({'backdrop': 'static'});" ><span class="glyphicon glyphicon-user" ></span> Entrar</a></li>
                <li><a data-toggle="modal" data-target="#registrar"><span class="glyphicon glyphicon-log-in" ></span> Registrar</a></li>

            </ul>
        </div>
    </div>
</nav>
<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(20).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(20).fadeOut(500);
    });
</script>