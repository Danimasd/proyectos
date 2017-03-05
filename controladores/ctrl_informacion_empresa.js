$(document).ready(function () {
    getInformacion();
});
function getInformacion()
{
    $.getJSON('../modelo/webserver.php', {
        action: "getInformacion"
    }, function (data) {
        if ((data.Nombre).length > 0)
        {
            $("#nombre").text(data.Nombre);
            $("#telefono").text(data.Telefono);
            $("#correo").text(data.Correo);
            $("#direccion").text(data.Direccion);
            $("#guardar").text("Actualizar Información");
        }

    })
}
function ingresar_data() {
    var n_instituto = $("#Nombre").val()
    var telefono = $("#Telefono").val()
    var mail = $("#Mail").val()
    var n_instituto = $("#Nombre").val()
    var dirección = $("#Nombre").val()
}

function see()
{

    window.location = 'ingresoInformacion.php';
}
