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

//pruebas mandar json en cuerpo de post

function send() {

    event.preventDefault();
    console.log(this);

    var datos = {
        robot: $("#selecRobot").val(),
        motor: $("#selecMotor").val(),
        pasos: $("#pasosForm").val(),
        velocidad: $("#velocidadForm").val()
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

        $('#sendFilas').click(function (event) {
            event.preventDefault();
            sendDatas();

        });

        $('#delFilas').click(function (event) {
            event.preventDefault();
            delFilas();

        });

        $('#addFilas').click(function (event) {
            event.preventDefault();
            addFila();

        });

        $('#saveSecuencia').click(function (event) {
            event.preventDefault();
            saveSecuencia();

        });

        $('#tablaBody').on('click', '.enviar', function(event){
            event.preventDefault();
            enviarFila(event);
        });

        $('#tablaBody').on('click', '.borrar', function(event){
            event.preventDefault();
            delFila(event);
        });

        openLegend(null,"divMando");
        alert('ok');

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

function sendDatas(){

    $.ajax({
        url: "/user/tablaDatos",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        //async: false,

    }).done(function() {

        var datos = $('#formulario').serialize();
        alert(datos);
        playVid();


    });

}

function playVid() {
    setTimeout(function () {
        var vid = document.getElementById("video");
        vid.play();
    },4000);

}

function enviarFila(data) {

    var row = data.parentNode.parentNode;

    var datosInput = $(row).find('input').serialize();
    var datosSelect = $(row).find('select').serialize();

    var datosFila = datosSelect+"&"+datosInput;

    alert(datosFila);



}

function delFila(data) {
    
    var row = data.parentNode.parentNode;
    row.parentNode.removeChild(row);

}

function saveSecuencia(){

    $.ajax({
        url: "/user/tablaDatos",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        //async: false,

    }).done(function() {



    });

}
