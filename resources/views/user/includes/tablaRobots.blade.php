<table class=table id="robots">
    <tr>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Direccion</th>
        <th>Usuarios asignados</th>
        <th>Acciones</th>
    </tr>
    @foreach($robots as $robot => $datosRobot)
            <tr>
            <td>
                {{ $datosRobot->name }}
            </td>
            <td>
                {{ $datosRobot->modelo }}
            </td>
            <td>
                {{ $datosRobot->host }}
            </td>
                <td>
                    @foreach($datosRobot->empleados as $user => $datosUser)
                    <li>{{ $datosUser->name }} </li>
                    @endforeach
                </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarRobot('{{ $datosRobot->id }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
    @endforeach
</table>