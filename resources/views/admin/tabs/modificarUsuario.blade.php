<div id="ModificarUsu" class="tabcontent">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="overflow-x:auto;">
                <table id="tablaUsuarios">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Confirmado</th>
                        <th>Tarifa</th>
                        <th>Tarjeta</th>
                        <th>Acciones</th>
                    </tr>

                    @foreach($users as $key => $data)
                        <tr>
                            <td>
                                <input type="text" value="{{ $data->name }}">
                            </td>
                            <td>
                                <input type="email" value="{{ $data->email }}">
                            </td>
                            <td>
                                <input type="checkbox" value="{{ $data->confirmado }}">
                            </td>
                            <td>
                                <select name="selecTarifa" id="selecTarifa">
                                    <option value="0">Sin tarifa</option>
                                    <option value="1" >Tarifa 1</option>
                                    <option value="2">Tarifa 2</option>
                                    <option value="3">Tarifa 3</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="{{ $data->confirmado }}">
                            </td>
                            <td>
                                <a href="admin/editarUsuario/{{ $data -> id }}" class="btnEditarUsuario"><span class="fa fa-floppy-o"></span></a>
                                <a href="admin/eliminarUsuario/{{ $data -> id }}" class="btnEliminarUsuario"><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td>
                            <input type="text" placeholder="Introduce nombre">
                        </td>
                        <td>
                            <input type="email" placeholder="Introduce email">
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>
                            <select name="selecTarifa" id="selecTarifa">
                                <option value="" selected="true" disabled="disabled">Selecciona</option>
                                <option value="0">Sin tarifa</option>
                                <option value="1" >Tarifa 1</option>
                                <option value="2">Tarifa 2</option>
                                <option value="3">Tarifa 3</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" placeholder="Introduce tarjeta">
                        </td>
                        <td>
                            <a href="admin/nuevoUsuario/" class="btnNuevoUsuario"><span class="fa fa-floppy-o"></span></a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>



</div>