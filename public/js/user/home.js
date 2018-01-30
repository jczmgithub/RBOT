// Funcion js para la funcion de tab del apartado leyendas

function openLegend(evt, divEvent) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(divEvent).style.display = "block";
    evt.currentTarget.className += " active";

}

function send(btn) {

    var row = $(btn).parent().parent();

    var datos = {
        robot: $(row).find('select[name="selecRobot"]').val(),
        motor: $(row).find('select[name="selecMotor"]').val(),
        pasos: $(row).find('input[name="pasosForm"]').val(),
        velocidad: $(row).find('input[name="velocidadForm"]').val()
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/prueba',
        type: 'post',
        dataType: 'text',
        success: function (data) {
            alert(data);
        },
        error: function (data) {
            alert("Fallo al enviar..."+data);
        },
        complete: function (data) {
            //alert("esto se hace siempre");
        },
        data: datos
    });

}

$(document).ready(function (){

    try {

        $('#addFilas').click(function (event) {
            event.preventDefault();
            addFila();

        });

        $('#delFilas').click(function (event) {
            event.preventDefault();
            delFilas();

        });

        $('#sendFilas').click(function (event) {
            event.preventDefault();
            enviarFilas();

        });

        $('#saveSecuencia').click(function (event) {
            event.preventDefault();
            saveSecuencia();

        });

        $('#guardarFilas').click(function (event){
            event.preventDefault();
            guardarFilas();
        })

        $('#tablaBody').on('click', '.enviar', function(event){
            event.preventDefault();
        });

        openLegend(null,"divMando");

    } catch (e) {
    }

});

function addFila() {

    $.ajax({
        url: "/user/tablaDatos",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        //async: false,
    }).done(function(data) {
        $('#tablaBody').append(data);
    });

}

function delFila(data) {

    var row = data.parentNode.parentNode;
    row.parentNode.removeChild(row);

}

function delFilas(){

    $.ajax({
        url: "/user/tablaDatos",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        //async: false,

    }).done(function() {

    $("#tablaBody tr").remove();

    });

}

function playVid() {
    setTimeout(function () {
        var vid = document.getElementById("video");
        vid.play();
    },4000);

}

function send(btn) {

    var row = $(btn).parent().parent();

    var datos = {
        robot: $(row).find('select[name="selecRobot"]').val(),
        motor: $(row).find('select[name="selecMotor"]').val(),
        pasos: $(row).find('input[name="pasosForm"]').val(),
        velocidad: $(row).find('input[name="velocidadForm"]').val()
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'http://10.14.1.209:8000/prueba',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            alert(data);
        },
        error: function (data) {
            alert("Fallo al enviar..."+data);
        },
        complete: function (data) {
            //alert("esto se hace siempre");
        },
        data: datos
    });

}

function enviarFila(row) {

    var datos = {
        robot: $(row).find('select[name="selecRobot"]').val(),
        motor: $(row).find('select[name="selecMotor"]').val(),
        pasos: $(row).find('input[name="pasosForm"]').val(),
        velocidad: $(row).find('input[name="velocidadForm"]').val()
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'http://10.14.1.209:8000/prueba',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            alert(data);
        },
        error: function (data) {
            alert("Fallo al enviar..."+data);
        },
        complete: function (data) {
            //alert("esto se hace siempre");
        },
        data: datos
    });
}

function enviarFilas() {

    var filas = $('tr');
    // var columnas;


    for(var i=1; i<filas.length; i++){

        // columnas = $(filas[i]).find('td');
        // console.log(columnas);
        //
        // for (var j=0; j<(columnas.length-1); j++){
        //     console.log($(columnas[j].children).val());
        // }

        enviarFila(filas[i]);
    }

    playVid();
}

function guardarFila(row) {

    var fichero = prompt("Introduce nombre de la función");

}

function guardarFilas() {

    var filas = $('tr');

    for(var i=1; i<filas.length; i++){

        guardarFila(filas[i]);

    }

}

function saveSecuencia() {


}
function eliminarUser(correo) {
    if (confirm('Estas segur@???')) {
        var datos = {
            email: correo
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/user/eliminarUser',
            type: 'post',
            dataType: 'text',
            success: function () {
                cargarTablaUser();
            },
            error: function () {
                alert("ERROR!!!");
            },
            data: datos
        });
    }
}
function cargarTablaUser() {
    $.ajax({
        url: "/user/verUser/tablaUser",
        type: 'get',
        headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function(data) {
        $('#usuarios').html(data);
    });
}
