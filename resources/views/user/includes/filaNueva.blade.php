<tr>
    <td class='col-xs-3'>
        <select name='selecRobot' class='form-control selector totalWidth' id="selecRobot">
            <option value='null'>-Seleccione el Robot-</option>
            @foreach ($modelos as $modelo)
                <option> {{ $modelo->modelo }} </option>
            @endforeach
        </select>
    </td>
    <td class='col-xs-3'><select name='selecMotor' class='form-control selector totalWidth' id="selecMotor">
            <option value='null'>-Seleccione el motor-</option>
            <option value='motor1'>Base</option>
            <option value='motor2'>Hombro</option>
            <option value='motor3'>Codo</option>
            <option value='motor4'>Brazo</option>
            <option value='motor5'>Muñeca</option>
            <option value='motor6'>Mano</option>
        </select></td>
    <td class='col-xs-2'>
        <input type='number' class='form-control totalWidth' name='pasosForm' value='0' id="pasosForm">
    </td>
    <td class='col-xs-2'>
        <input type='number' class='form-control totalWidth' name='velocidadForm' value='0' id="velocidadForm">
    </td>
    <td class='col-xs-2'>
        <span class="fa fa-paper-plane fa-2x" onclick="send(this)"></span></span>
        <span class="fa fa-times fa-2x" id="borrarFila" onclick="eliminarFila(this)"></span>
    </td>
</tr>