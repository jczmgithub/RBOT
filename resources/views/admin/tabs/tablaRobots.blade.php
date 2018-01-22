<table id="tablaRobots">
    <tr>
        <th>Usuario</th>
        <th>Modelo</th>
        <th>Host</th>
        <th>Acciones</th>
    </tr>

    <div id="filasRobots">
        @foreach($users as $key => $data)
            <tr>
                <td>
                    <input id="nombre{{ $data->id }}" type="text" value="{{ $data->name }}">
                </td>
                <td>
                    <input id="email{{ $data->id }}" type="email" value="{{ $data->email }}">
                </td>
                <td>
                    @if($data->confirmado == 0)
                        <input id="confirmado{{ $data->id }}" type="checkbox">
                    @else
                        <input id="confirmado{{ $data->id }}" type="checkbox" checked>
                    @endif
                </td>
                <td>
                    <select id="tarifa{{ $data->id }}" name="tarifa">
                    @for ($i = 0; $i <= 3; $i++)
                        @if($data->tarifa == $i)
                            <option value={{ $i }} selected>Tarifa {{ $i }}</option>
                        @else
                            <option value={{ $i }}>Tarifa {{ $i }}</option>
                        @endif
                    @endfor
                    </select>
                </td>
                <td>
                    <input id="credito{{ $data->id }}" type="text" value="{{ $data->credito }}">
                </td>
                <td>
                    <a href="#" class="btnEditarUsuario" onclick="editarUsuario({{ $data -> id }})"><span class="fa fa-pencil-square-o"></span></a>
                    <a href="#" class="btnEliminarUsuario" onclick="eliminarUsuario({{ $data -> id }})"><span class="fa fa-times"></span></a>
                </td>
            </tr>
        @endforeach
    </div>

    <tr>
        <td>
            <input id="nombre" type="text" placeholder="Introduce nombre">
        </td>
        <td>
            <input id="email" type="email" placeholder="Introduce email">
        </td>
        <td>
            <input id="confirmado" type="checkbox">
        </td>
        <td>
            <select name="tarifa" id="tarifa">
                <option value="" selected="true" disabled="disabled">Selecciona</option>
                <option value="0">Sin tarifa</option>
                <option value="1" >Tarifa 1</option>
                <option value="2">Tarifa 2</option>
                <option value="3">Tarifa 3</option>
            </select>
        </td>
        <td>
            <input id="credito" type="text" placeholder="Introduce tarjeta">
        </td>
        <td>
            <a href="#" class="btnNuevoUsuario" onclick="nuevoUsuario()"><span class="fa fa-floppy-o"></span></a>
        </td>
    </tr>

</table>