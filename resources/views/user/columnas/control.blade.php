<div class="col-sm-4">

    <h3>Controles</h3>

    <div id="controles">

        <form action="/">

            <select class="form-control selector">

                <option value="">--Seleccione el Robot--</option>
                <option value="robot1">Robot1</option>
                <option value="robot2">Robot2</option>
                <option value="robot3">Robot3</option>

            </select>

            <h5>Motores:</h5>

            <select class="form-control selector" id="selecMotor">

                <option value="">--Seleccione el motor--</option>
                <option value="motor1">Base</option>
                <option value="motor2">Hombro</option>
                <option value="motor3">Brazo</option>
                <option value="motor4">Codo</option>
                <option value="motor5">Muñeca</option>
                <option value="motor6">Mano</option>

            </select>

            <h5>Pasos:</h5>

            <input type="number" class="form-control" id="pasosForm">



            <h5>Velocidad:</h5>

            <div class="row">
                <div class="col-xs-6">
                    <div class="range range-primary" id="velocidadForm">
                        <input type="range" name="range" min="0" max="100" value="50" onchange="rangePrimary.value=value">
                        <output id="rangePrimary">50</output>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" id="botonFormRobot">Enviar Datos</button>

        </form>

    </div>

    {!! HTML::script('js/user/home.js'); !!}

</div>