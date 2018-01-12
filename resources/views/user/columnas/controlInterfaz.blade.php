<div class="col-sm-8">

<h3>Controles</h3>
    <table id="controles" class="table table-fixed">
        <thead>
        <tr>
            <th class="col-xs-3">Robot</th>
            <th class="col-xs-3">Motor</th>
            <th class="col-xs-2">Pasos</th>
            <th class="col-xs-2">Velocidad</th>
            <th class="col-xs-2">Acción</th>
        </tr>
        </thead>
        <tbody id="tablaBody">

        <tr id="filaDatos">
            <td class="col-xs-3">
                <select name="selecRobot" class="form-control selector totalWidth" id="selecRobot">

                    <option value="null">-Seleccione el Robot-</option>

                    @foreach ($modelos as $modelo)
                        <option> {{ $modelo->modelo }} </option>
                    @endforeach

                </select>
            </td>
            <td class="col-xs-3">
                <select name="selecMotor" class="form-control selector totalWidth" id="selecMotor">

                    <option value="null">-Seleccione el motor-</option>
                    <option value="motor1" >Base</option>
                    <option value="motor2">Hombro</option>
                    <option value="motor3">Codo</option>
                    <option value="motor4">Brazo</option>
                    <option value="motor5">Muñeca</option>
                    <option value="motor6">Mano</option>

                </select>

            </td>
            <td class="col-xs-2">

                <input type="number" class="form-control totalWidth" id="pasosForm" name="pasosForm" value="0" >

            </td>
            <td class="col-xs-2">

                <div class="range range-primary totalWidth" >
                    <input type="range" name="velocidadForm" min="0" max="100" id="velocidadForm" onchange="rangePrimary.value=value" >
                    <output id="rangePrimary">50</output>
                </div>

            </td>
            <td class="col-xs-2">
                <span class="fa fa-pencil-square-o fa-2x"></span>
                <span class="fa fa-times fa-2x"></span>
            </td>

        </tr>
        </tbody>
    </table>

    <div id="botonesControl">
        <button class="btn btn-success botonesFunciones" onclick="addFila()"><span class="fa fa-plus-square" aria-hidden="true"></span></button>
        <button class="btn btn-primary botonesFunciones" onclick="send()">Enviar</button>
        <button class="btn btn-primary botonesFunciones" id="mostrar">Mostrar</button>
        <button class="btn btn-primary botonesFunciones" onclick="saveFila()">Guardar</button>
        <button class="btn btn-primary botonesFunciones" onclick="delFila()">Eliminar</button>
    </div>

</div>