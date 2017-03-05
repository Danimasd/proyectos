$(document).ready(function () {

});

function inicio()
{
    $("#mensaje").text("");
    var usuario = $("#usuario").val()
    var clave = $("#clave").val();
    if ($.trim(usuario).length > 2)
    {
        if ($.trim(clave).length > 2)
        {
            $.post('../modelo/webserver.php', {action: "inicio_session", usuario: usuario, clave: clave}, function (data) {
                if (data == 1)
                {
                    $("#mensaje").html("<center class='text text-success'> <img src='../img/gif-load.gif'> Iniciando Sessión.. </center>");
                    setTimeout(function ()
                    {
                        window.location.href = "../vistas/informacion.php";
                    }, '2000');
                } else
                {

                }
            });
        } else
        {
            $("#mensaje").html("<div class='text text-center text-danger'>La clave es requerido</center></div>");
        }
    } else
    {
        $("#mensaje").html("<div class='text text-center text-danger'>El usuario es requerido</center></div>");
    }
}

