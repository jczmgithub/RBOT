
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
        <input type='number' class='form-control totalWidth' name='pasosForm' value='10' id="pasosForm">
    </td>
    <td class='col-xs-2'>
        <input type='number' class='form-control totalWidth' name='velocidadForm' value='50' id="velocidadForm">
    </td>
    <td class='col-xs-2'>
        <button class="btn btn-sm btn-success enviar" onclick="enviarFila(this)"><span class="fa fa-paper-plane" ></span></button>
        <button class="btn btn-sm btn-danger borrar" onclick="delFila(this)"><span class="fa fa-times" id="borrarFila" ></span></button>
    </td>
</tr>
