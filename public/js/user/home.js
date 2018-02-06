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

        // $('#cerrarModal').click(function (event) {
        //     event.preventDefault();
        //     delFilas();
        //
        // });

        $('#sendFilas').click(function (event) {
            event.preventDefault();
            enviarFilas();

        });

        $('#saveSecuencia').click(function (event) {
            event.preventDefault();
            guardarFilas();

        });

        $('#loadSecuencia').click(function (event) {
            event.preventDefault();
            cargarSecuncia();
        });

        $('#stopRobot').click(function (event) {
            event.preventDefault();
            paradoEmergencia();
        });

        $('#homeRobot').click(function (event) {
            event.preventDefault();
            vueltaOrigen();
        });


        $('#selecSecuencia').on('change', function (event) {
           var $optionSelected=$('option:selected',this);
           var valueSelected=$optionSelected.val();
           //var valueSelected=$('this.value');
           console.log($optionSelected);
           console.log(valueSelected);

           var datos={
             fichero: valueSelected
           };

            $.ajax({
                url: "/mostrarValores",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:datos
                //async: false,
            }).done(function(data) {
                $('#tablaBody').empty();
                var filasArray=data.split(';');
                var contenidoFilaArray;

                for(var i=1; i < filasArray.length; i++){
                    console.log(filasArray[i]);
                    contenidoFilaArray = filasArray[i].split(',');
                    var datosArray = new Array();
                    for(var j=0; j < contenidoFilaArray.length; j++){
                        datosArray.push(contenidoFilaArray[j]);
                    }
                    addFilaS3(datosArray[0],datosArray[1],datosArray[2],datosArray[3]);
                }
            });

        });

        $('#tablaBody').on('click', '.enviar', function(event){
            event.preventDefault();
        });

        openLegend(null,"divRobot");

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

function addFilaS3(robot,motor,pasos,velocidad) {

    $.ajax({
        url: "/user/tablaDatos",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        //async: false,
    }).done(function(data) {

        $filaContenido = $(data);

        $($filaContenido).find('select[name="selecRobot"]').val(robot);
        $($filaContenido).find('select[name="selecMotor"]').val(motor);
        $($filaContenido).find('input[name="pasosForm"]').val(pasos);
        $($filaContenido).find('input[name="velocidadForm"]').val(velocidad);

        // console.log($pasos.val());

        $('#tablaBody').append($filaContenido);
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
    $('#videoSrc').attr('src', '/video/secuencia_completa.mp4');
    document.getElementById("video").load();
    setTimeout(function () {
        var vid = document.getElementById("video");
        vid.play();
    },4000);

}

function playVidPos(motor) {
    $('#videoSrc').attr('src', '/video/'+motor+'.mp4');
    document.getElementById("video").load();
    setTimeout(function () {
        var vid = document.getElementById("video");
        vid.play();
    },2000);
}

function playVidOrigen() {
    //var video = $('#videoSrc').attr('src').substring(0, 4)+'Inverso'+$('#videoSrc').attr('src').substring(4, 8);

    //var video = $('#videoSrc').attr('src').replace('.', 'inverso.');


    $('#videoSrc').attr('src').replace('.', 'inverso.');

    document.getElementById("video").load();
    setTimeout(function () {
        var vid = document.getElementById("video");
        vid.play();
    },2000);

    console.log($('#videoSrc').attr('src'));
    console.log(video);
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
        url: '/domotekSend',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            alert(data);
            playVidPos($(row).find('select[name="selecMotor"]').val());
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

function paradoEmergencia() {

    var datos = {
        mensaje: 'Stop'
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/domotekStop',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            alert(data);
        },
        error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
            // alert(xhr.status);
            // alert(xhr.responseText);
        },
        complete: function (data) {
            //alert("esto se hace siempre");
        },
        data: datos
    });

}

function vueltaOrigen() {

    var datos = {
        mensaje: 'origen'
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/domotekHome',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            alert(data);
            playVidOrigen();
        },
        error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
            // alert(xhr.status);
            // alert(xhr.responseText);
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
        url: '/domotekSend',
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

    playVid();
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

// function guardarFila(row, fichero) {
//
//     var datos = {
//         robot: $(row).find('select[name="selecRobot"]').val(),
//         motor: $(row).find('select[name="selecMotor"]').val(),
//         pasos: $(row).find('input[name="pasosForm"]').val(),
//         velocidad: $(row).find('input[name="velocidadForm"]').val(),
//         fichero: fichero
//     };
//
//     $.ajax({
//
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         url: '/guardarFila',
//         type: 'POST',
//         dataType: 'text',
//         success: function (data) {
//             //alert(data);
//         },
//         error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
//             alert(xhr.status);
//             alert(xhr.responseText);
//         },
//         complete: function (data) {
//             //alert("esto se hace siempre");
//         },
//         data: datos
//     });
//
// }
//
// function guardarFilas() {
//
//     var fichero = prompt("Introduce nombre de la secuencia");
//
//     var filas = $('tr');
//
//     for(var i=1; i<filas.length; i++){
//
//         guardarFila(filas[i], fichero);
//
//     }
//
// }

function guardarFila(string, fichero) {

    var datos = {
        filas: string,
        fichero: fichero
    };

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/guardarFila',
        type: 'POST',
        dataType: 'text',
        success: function (data) {
            //alert(data);
        },
        error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
            // alert(xhr.status);
            // alert(xhr.responseText);
        },
        complete: function (data) {
            //alert("esto se hace siempre");
        },
        data: datos
    });

}

function guardarFilas() {

    var fichero = prompt("Introduce nombre de la secuencia");

    var filas = $('tr');

    var filasString = '';

    for(var i=1; i<filas.length; i++){

        filasString = filasString+';'+$(filas[i]).find('select[name="selecRobot"]').val()+','+
            $(filas[i]).find('select[name="selecMotor"]').val()+','+
            $(filas[i]).find('input[name="pasosForm"]').val()+','+
            $(filas[i]).find('input[name="velocidadForm"]').val();

        $(filas[i]).find('select[name="selecRobot"]').val();

        // filasString = filasString+$filas[i][0]+'\r\n';
        //
        // for(var j=1; j<$($filas[i]).children().length; j++){
        //
        //     $($filas[i]).children().val();
        //
        //     console.log($($filas[j]).children());
        //     filasString = filasString+$filas[i][0]+'\r\n';
        //
        // }
    }

    // console.log(filasString);
    guardarFila(filasString, fichero);

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

function cargarSecuncia(){
        $("#myModal").modal();

        $('#selecSecuencia').empty();

        $.ajax({
            url: "/listadoS3",
            type: 'get',
            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        }).done(function(data) {
            //alert(data);
            $('<option/>',{
                text:'--Selecciona la secuencia--',
                disabled:'disabled',
                selected:'selected'
            }).appendTo('#selecSecuencia');
            for(var i=0;i<data.length;i++){
                //console.log(data[i]);

                $('<option/>',{
                    text:data[i],
                    value:data[i]
                }).appendTo('#selecSecuencia');
            }

        });
}

function cargarTablaRobot() {
    $.ajax({
        url: "/user/verRobot/tablaRobot",
        type: 'get',
        headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function(data) {
        $('#robots').html(data);
    });
}
function eliminarRobot(id) {
    if (confirm('Estas segur@???')) {
        var datos = {
            id: id
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/user/eliminarRobot',
            type: 'post',
            dataType: 'text',
            success: function () {
                cargarTablaRobot();
            },
            error: function () {
                alert("ERROR!!!");
            },
            data: datos
        });
    }
}