<aside>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br>
        <a href="#" class="tablinks" onclick="openTab(event, 'Home')">Home</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'CrearUsu')">Crear usuario</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'ModificarUsu')">Modificar usuario</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'BorrarUsu')">Borrar usuario</a>
        <a href="#">Crear robot</a>
        <a href="#">Modificar robot</a>
        <a href="#">Borrar robot</a>

    </div>

    {!! HTML::style('css/layouts/aside.css') !!}
    {!! HTML::script('js/layouts/aside.js'); !!}

</aside>