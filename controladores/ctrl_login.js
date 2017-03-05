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
            $.post('../functions/wsMain.php', {action: 'cbxgetSede'}, function (data) {
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

