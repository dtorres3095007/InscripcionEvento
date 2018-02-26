
var server = "localhost";
var p = 0;
$(document).ready(function () {
    server = Traer_Server();
    $("#cbx_mas_personas").change(function () {
        var n = $(this).val();
        if (n.length != 0) {
            CrearNpersonas(n);
        } else {
            $("#maspersona").html("");
            p = 0;
        }

    });

    $("input[type=text]").change(function () {
        var valor = $(this).val();
        valor = valor.trim();
        $(this).val(valor.toUpperCase());

    });
    $("textarea").change(function () {
        var valor = $(this).val();
        valor = valor.trim();
        $(this).val(valor.toUpperCase());

    });

});

function Traer_Server() {
    return "localhost";
}

$("#guardarinscripcion").submit(function () {

    GuardarInscripcion();

    return false;
});
function GuardarInscripcion() {


    //Tomamos los datos del formulario de inscripcion
    var formData = new FormData(document.getElementById("guardarinscripcion"));

    //  Enviamos el formulario al controlador     
    $.ajax({
        url: "http://" + server + "/InscripcionEvento/index.php/pages/GuardarInscripcion",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    }).done(function (datos) {

        if (datos == 1) {

            Limpiar_focus("#nombres", "<b>!Error!</b> Ingrese Nombres.", "danger");

        } else if (datos == 2) {
            Limpiar_focus("#apellidos", "<b>!Error!</b> Ingrese Apellidos.", "danger");
        }
        if (datos == 11) {

            Limpiar_focus("#nombres", "<b>!Error!</b> El Campo Nombres No puede Contener Numeros.", "danger");

        } else if (datos == 12) {
            Limpiar_focus("#apellidos", "<b>!Error!</b> El Campo Apellidos No puede Contener Numeros.", "danger");
        } else if (datos == 3) {
            Limpiar_focus("#empresa_trabaja", "<b>!Error!</b> Ingrese Empresa donde Trabaja.", "danger");
        } else if (datos == 4) {
            Limpiar_focus("#codigo_emp_paga", "<b>!Error!</b> Ingrese NIF O CIF.", "danger");
        } else if (datos == 5) {
            Limpiar_focus("#telefono", "<b>!Error!</b> Ingrese Telefono.");
        } else if (datos == 6) {
            Limpiar_focus("#direccion", "<b>!Error!</b> Ingrese Direccion.", "danger");
        } else if (datos == 7) {
            Limpiar_focus("#postal", "<b>!Error!</b> Ingrese Codigo Postal.", "danger");
        } else if (datos == 8) {

            Limpiar_focus("#correo", "<b>!Error!</b> Ingrese Correo.", "danger");
        } else if (datos == 10) {

            Limpiar_focus("#ciudad_pais", "<b>!Error!</b> Ingrese Ciudad-Pais.", "danger");
        } else {
            Limpiar_focus("#des_", "<b>!Bien!</b>  Inscripcion Guardada Con Exito, Puede Proceder Con el Pago.", "success");
            $("input").val("");
            $("textarea").val("");
        Continuar();
        }

    });

}

function Continuar() {
    $("#Incr").hide("slow");
    $("#pagar").show("slow");
}
function Regresar() {
    $("#pagar").hide("slow");
    $("#Incr").show("slow");
}
function MasPersona() {
    if (p == 0) {
        $("#maspersona").append("<br>");
    }
    $("#maspersona").append('<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Datos Persona ' + (p + 1) + '</h3></div><div class="panel-body"><input name="nombres' + p + '" required="" class="form-control mar-3" placeholder="Nombres"><input name="apellidos" required="" class="form-control mar-3" placeholder="Apellidos"></div></div>');
    p++;
    if (p >= 4) {
        $("#masperso").remove();
        $("#maspersona").append("<div class='btn btn-danger' onclick='MasPersona()' id='masperso'><span class='glyphicon glyphicon-plus ' ></span> Mas Personas</div>")
    }
}
function CrearNpersonas(n) {
    $("#maspersona").html("");
    p = 0;
    for (var i = 0; i < n; i++) {
        MasPersona();
    }
}
function Limpiar_focus(sele, mensaje, tipo_me) {
    $("#mensaje_error_bien").remove();
    $(sele).after('<div class="mar-3 alert alert-' + tipo_me + '" id="mensaje_error_bien">...</div>');
    $("#mensaje_error_bien").html(mensaje);
    $("#mensaje_error_bien").show("slow");
    $(sele).val("");
    $(sele).focus();
}