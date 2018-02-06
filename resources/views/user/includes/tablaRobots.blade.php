<table class=table id="robots">
    <tr>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Direccion</th>
        <th>Usuarios asignados</th>
        <th>Acciones</th>
    </tr>
    @foreach($robots as $key => $data)
        {{--@if($data->user_id==Auth::user()->id)--}}
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
                        @if($datos->robotID==$data->id )
                        <li>{{ $datos->name }} </li>
                       @endif
                    @endforeach
                </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarRobot('{{ $data->id }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
        {{--@endif--}}
    @endforeach
</table>