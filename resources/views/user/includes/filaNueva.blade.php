<tr>
    <td class='col-xs-3'>
        <select name='selecRobot' class='form-control selector totalWidth' onclickT='enableMotor()'>
            <option value=''>-Seleccione el Robot-</option>
            @foreach ($modelos as $modelo)
                <option> {{ $modelo->modelo }} </option>
            @endforeach
        </select>
    </td>
    <td class='col-xs-3'><select name='selecMotor' class='form-control selector totalWidth' disabled>
            <option value=''>-Seleccione el motor-</option>
            <option value='motor1'>Base</option>
            <option value='motor2'>Hombro</option>
            <option value='motor3'>Codo</option>
            <option value='motor4'>Brazo</option>
            <option value='motor5'>Muñeca</option>
            <option value='motor6'>Mano</option>
        </select></td>
    <td class='col-xs-2'>
        <input type='number' class='form-control totalWidth' name='pasosForm' value='0' disabled>
    </td>
    <td class='col-xs-2'>
        <div class='range range-primary totalWidth'>
            <input type='range' name='velocidadForm' min='0' max='50' onchange='rangePrimary.value=value' disabled>
            <output id='rangePrimary'>10</output>
        </div>
    </td>
    <td class='col-xs-2'><span class='fa fa-pencil-square-o'></span><span class='fa fa-times'></span></td>
</tr>