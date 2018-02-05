<table class=table id="robots">
    <tr>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Direccion</th>
        <th>Usuarios asignados</th>
        <th>Acciones</th>
    </tr>
    @foreach($robots as $key => $data)
        <tr>
            <td>
                {{ $data->robotName }}
            </td>
            <td>
                {{ $data->modelo }}
            </td>
            <td>
                {{ $data->host }}
            </td>
                <td>
                    @foreach($users as $user => $datos)
                        <li>{{ $datos->name }}</li>
                    @endforeach
                </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarRobot('{{ $data->id }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
    @endforeach
</table>