<div class="col-sm-3">

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

            <input type="number" class="form-control" id="pasosForm" name="pasos" value="0" disabled onclick="enableEnviar()">

            <h5>Velocidad:</h5>

            <div class="row">
                <div class="col-xs-6">
                    <div class="range range-primary" >
                        <input type="range" name="velocidad" min="0" max="100" id="velocidadForm" onchange="rangePrimary.value=value" disabled>
                        <output id="rangePrimary">50</output>
                    </div>
                </div>
            </div>

            <button type="submit" id="enviar" disabled>Enviar datos</button>

            <button onclick="guardarDatos()" id="guardar" disabled>Guardar datos</button>

        </form>
        
    </div>

    {!! HTML::script('js/user/home.js'); !!}

</div>