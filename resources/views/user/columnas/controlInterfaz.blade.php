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
        @include('user.includes.filaNueva')
        </tbody>
    </table>

    <div id="botonesControl">
        <button class="btn btn-success botonesFunciones" onclick="addFila()"><span class="fa fa-plus-square" aria-hidden="true"></span></button>
        <button class="btn btn-primary botonesFunciones" onclick="delFilas()">Eliminar</button>
    </div>

</div>