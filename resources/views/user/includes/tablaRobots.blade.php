<table class=table id="robots">
    <tr>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Direccion</th>
        <th>Usuarios asignados</th>
        <th>Acciones</th>
    </tr>
    @foreach($robots as $robot => $datosRobot)
        @if($datosRobot->user_id==Auth::user()->id )
            {{--or $datosRobot->user_id == Auth::user()->isEmploy(Auth::user()->id)--}}
            <tr>
            <td>
                {{ $datosRobot->robotName }}
            </td>
            <td>
                {{ $datosRobot->modelo }}
            </td>
            <td>
                {{ $datosRobot->host }}
            </td>
                <td>
                {{--@elseif($data->user_id==Auth::user()->isEmploy())--}}
                    @foreach($users as $user => $datosUser)
                        @if($datosUser->robotID==$datosRobot->id )
                            <li>{{ $datosUser->name }} </li>
                        @endif
                    @endforeach

                </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarRobot('{{ $datosRobot->id }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
        @endif
    @endforeach
</table>