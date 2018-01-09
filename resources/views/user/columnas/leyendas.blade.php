<div class="col-sm-4">

    <h3>Leyendas</h3>

    <div class="tab">
        <button class="tablinks" onclick="openLegend(event, 'divMando')">Mando</button>
        <button class="tablinks" onclick="openLegend(event, 'divRobot')">Robot</button>
        <button class="tablinks" onclick="openLegend(event, 'divDatos')">Datos</button>
    </div>

    <div id="divMando" class="tabcontent">

        <img id="mando" src="/img/mando.png" class="img-responsive" alt="Mando robot">

    </div>

    <div id="divRobot" class="tabcontent">

        <img id="robot" src="/img/" class="img-responsive" alt="Mando robot">

    </div>

    <div id="divDatos" class="tabcontent">

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
