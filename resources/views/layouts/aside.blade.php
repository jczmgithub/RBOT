<aside>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br>
        <a href="#" class="tablinks" onclick="openTab(event, 'Home')">Home</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'CrearUsu')">Crear usuario</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'modificarUsu')">Administrar usuarios</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'BorrarUsu')">Borrar usuario</a>
        <a href="#">Administrar robots</a>

    </div>

    {!! HTML::style('css/layouts/aside.css') !!}
    {!! HTML::script('js/layouts/aside.js'); !!}

</aside>