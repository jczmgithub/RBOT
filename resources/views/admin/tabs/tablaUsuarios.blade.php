<table id="tablaUsuarios">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Confirmado</th>
        <th>Tarifa</th>
        <th>Tarjeta</th>
        <th>Acciones</th>
    </tr>

    <div id="filasUsuarios">
        @foreach($users as $key => $data)
            <tr>
                <td>
                    <input type="text" value="{{ $data->name }}">
                </td>
                <td>
                    <input type="email" value="{{ $data->email }}">
                </td>
                <td>
                    @if($data->confirmado == 0)
                        <input type="checkbox">
                    @else
                        <input type="checkbox" checked="checked">
                    @endif
                </td>
                <td>
                    <select name="selecTarifa" id="selecTarifa">
                    @switch($data->tarifa)
                        @case(0)
                            <option value="0" selected>Sin tarifa</option>
                            <option value="1">Tarifa 1</option>
                            <option value="2">Tarifa 2</option>
                            <option value="3">Tarifa 3</option>
                        @break
                        @case(1)
                            <option value="0">Sin tarifa</option>
                            <option value="1" selected>Tarifa 1</option>
                            <option value="2">Tarifa 2</option>
                            <option value="3">Tarifa 3</option>
                        @break
                        @case(2)
                            <option value="0">Sin tarifa</option>
                            <option value="1">Tarifa 1</option>
                            <option value="2" selected>Tarifa 2</option>
                            <option value="3">Tarifa 3</option>
                        @break
                        @case(3)
                            <option value="0">Sin tarifa</option>
                            <option value="1">Tarifa 1</option>
                            <option value="2">Tarifa 2</option>
                            <option value="3" selected>Tarifa 3</option>
                        @break
                    @endswitch
                    </select>
                </td>
                <td>
                    <input type="text" value="{{ $data->credito }}">
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