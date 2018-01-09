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
                                <a href="admin/eliminarUsuario/{{ $data -> id }}" class="btnEliminarUsuario">X</a>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td>
                            <select name="selecMotor" class="form-control selector" id="selecMotor"  onclick="enablePasosVelocidad()">

                                <option value="">-Seleccione el motor-</option>
                                <option value="motor1" >Base</option>
                                <option value="motor2">Hombro</option>
                                <option value="motor3">Brazo</option>
                                <option value="motor4">Codo</option>
                                <option value="motor5">Muñeca</option>
                                <option value="motor6">Mano</option>

                            </select>
                        </td>
                        <td>
                            <select name="selecMotor2" class="form-control selector" id="selecMotor2"  onclick="enablePasosVelocidad()">

                                <option value="">-Seleccione el motor-</option>
                                <option value="motor1" >Base</option>
                                <option value="motor2">Hombro</option>
                                <option value="motor3">Brazo</option>
                                <option value="motor4">Codo</option>
                                <option value="motor5">Muñeca</option>
                                <option value="motor6">Mano</option>

                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control" id="pasosForm" name="pasos" value="0" >
                        </td>
                        <td>
                            <div class="range range-primary" >
                                <input type="range" name="velocidad" min="0" max="100" id="velocidadForm" onchange="rangePrimary.value=value"  onclick="enableGuardar()">
                                <output id="rangePrimary">50</output>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button">Nueva fila</button>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>



</div>