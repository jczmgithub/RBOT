<form id="formulario" method="post" action="#">
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
        <button id="addFilas" class="btn btn-success botonesFunciones"><span class="fa fa-plus-square" aria-hidden="true"></span></button>
        <button id="sendFilas" class="btn btn-primary botonesFunciones">Enviar Todo</button>
        <button id="saveSecuencia" class="btn btn-primary botonesFunciones">Guardar</button>
        <button id="loadSecuencia" class="btn btn-primary botonesFunciones">Cargar</button>
        <button id="delFilas" class="btn btn-primary botonesFunciones">Eliminar</button>
    </div>

</div>
</form>