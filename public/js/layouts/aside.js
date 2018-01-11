/* Set the width of the side navigation to 30vw and the left margin of the page content to 30vw */
function openNav() {
    document.getElementById("mySidenav").style.width = "30vw";
    document.getElementById("main").style.marginLeft = "30vw";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}


/* Tabs */
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(tabName).style.display = "block";
    if (evt !== null) {
        evt.currentTarget.className += "active";
    }
}

// A $( document ).ready() block.
$( document ).ready(function() {
    openTab(null, "Home");
});

function cargarTabla() {
    $.ajax({
        url: "admin/cargarFilasUsuarios",
        type: 'post',
        headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    }).done(function(data) {
        $('#tablaUsuariosDiv').html(data);
    });
}

function eliminarUsuario(id) {
    if (confirm('Estas segur@???')) {
        var datos = {
            id: id
        };

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/eliminarUsuario',
            type: 'post',
            dataType: 'text',
            success: function (data) {
                cargarTabla();
            },
            error: function (data) {
                alert("ERROR!!!");
            },
            data: datos
        });
    }
}

function nuevoUsuario() {
    if (confirm('Estas segur@???')) {
        var datos = {
            
        };

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/nuevoUsuario',
            type: 'post',
            dataType: 'text',
            success: function (data) {
                cargarTabla();
            },
            error: function (data) {
                alert("ERROR!!!");
            },
            data: datos
        });
    }
}

function editarUsuario(id) {
    if (confirm('Estas segur@???')) {
        var datos = {
            id: id
        };

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/editarUsuario',
            type: 'post',
            dataType: 'text',
            success: function (data) {
                cargarTabla();
            },
            error: function (data) {
                alert("ERROR!!!");
            },
            data: datos
        });
    }
}