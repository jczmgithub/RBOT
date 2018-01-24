<table id="tablaRobots">
    <tr>
        {{--<th>Usuario</th>--}}
        <th>Modelo</th>
        <th>Host</th>
        <th>Acciones</th>
    </tr>

    <div id="filasRobots">
        @foreach($robots as $key => $data)
            <tr>
                {{--<td>--}}
                    {{--<input id="usuario{{ $data->id }}" type="number" value="{{ $data->user_id }}">--}}
                {{--</td>--}}
                <td>
                    <input id="modelo{{ $data->id }}" type="text" value="{{ $data->modelo }}">
                </td>
                <td>
                    <input id="host{{ $data->id }}" type="text" value="{{ $data->host }}">
                </td>
                <td>
                    <a href="#" class="btnEditarRobot" onclick="editarRobot({{ $data -> id }})"><span class="fa fa-pencil-square-o"></span></a>
                    <a href="#" class="btnEliminarRobot" onclick="eliminarRobot({{ $data -> id }})"><span class="fa fa-times"></span></a>
                </td>
            </tr>
        @endforeach
    </div>

    <tr>
        {{--<td>--}}
            {{--<input id="usuario" type="number" placeholder="Introduce usuario">--}}
        {{--</td>--}}
        <td>
            <input id="modelo" type="text" placeholder="Introduce modelo">
        </td>
        <td>
            <input id="host" type="text" placeholder="Introduce host">
        </td>
        <td>
            <a href="#" class="btnNuevoRobot" onclick="nuevoRobot()"><span class="fa fa-floppy-o"></span></a>
        </td>
    </tr>

</table>