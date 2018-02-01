<table class=table id="robots">
    <tr>
        <th>Modelo</th>
        <th>Direccion</th>
        <th>Acciones</th>
    </tr>
    @foreach($robots as $key => $data)
        <tr>
            <td>
                {{ $data->modelo }}
            </td>
            <td>
                {{ $data->host }}
            </td>

            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarRobot('{{ $data->id }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
    @endforeach
</table>