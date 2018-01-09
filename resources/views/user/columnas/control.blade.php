<div class="col-sm-7">

    <h3>Controles</h3>

    <div id="controles">

        <form action="{{ route('datosRobot') }}" method="POST">

            {{ csrf_field() }}

            <select name="selecRobot" class="form-control selector" id="selecRobot" onclick="enableMotor()">

                <option value="">-Seleccione el Robot-</option>

                @foreach ($modelos as $modelo)
                    <option> {{ $modelo->modelo }} </option>
                @endforeach

            </select>

            <h5>Motores:</h5>

            <select name="selecMotor" class="form-control selector" id="selecMotor" disabled onclick="enablePasosVelocidad()">

                <option value="">-Seleccione el motor-</option>
                <option value="motor1" >Base</option>
                <option value="motor2">Hombro</option>
                <option value="motor3">Brazo</option>
                <option value="motor4">Codo</option>
                <option value="motor5">Muñeca</option>
                <option value="motor6">Mano</option>

            </select>

            <h5>Pasos:</h5>

            <input type="number" class="form-control" id="pasosForm" name="pasos" value="0" disabled>

            <h5>Velocidad:</h5>

            <div class="row">
                <div class="col-xs-6">
                    <div class="range range-primary" >
                        <input type="range" name="velocidad" min="0" max="100" id="velocidadForm" onchange="rangePrimary.value=value" disabled onclick="enableGuardar()">
                        <output id="rangePrimary">50</output>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="añadir" value="añadir" name="submit" disabled>Añadir</button>

            <button type="submit" class="btn btn-primary" id="guardar" value="guardar" name="submit" disabled onclick="enableEnviar()">Guardar</button>

            <button type="submit" class="btn btn-primary" id="enviar" value="enviar" name="submit" disabled>Enviar</button>

        </form>

        <button id="prueba" onclick="send()">Prueba</button>

        <table class="table table-bordered table-hover table-condensed">
            <thead>
            <tr><th title="Robot">Robot</th>
                <th title="Motor">Motor</th>
                <th title="Pasos">Pasos</th>
                <th title="Velocidad">Velocidad</th>
                <th title="Eliminar">Eliminar</th>
            </tr>
            </thead>
            <tbody id="contenidoFormulario">

            </tbody>
        </table>


        <button class="btn btn-primary" id="eliminar" value="eliminar">Eliminar</button>

    </div>

</div>