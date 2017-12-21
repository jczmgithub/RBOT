<div id="ModificarUsu" class="tabcontent">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table id="tablaUsuarios">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>

                    @foreach($users as $key => $data)
                        <tr>
                            <td>
                                {{ $data->name }}
                            </td>
                            <td>
                                {{ $data->email }}
                            </td>
                            <td>
                                <button type="button">Editar</button>
                            </td>
                            <td>
                                <button type="button">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>



</div>