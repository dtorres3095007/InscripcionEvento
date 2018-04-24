var idioma = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Ningún dato disponible en esta tabla...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
var server = "localhost";
var p = 0;
var oc=0;
$(document).ready(function () {
    server = Traer_Server();

    // prueba(2);
    $("#mostrar_ocultar").click(function (){
        if (oc ==0){
          $("#tabla-dinam tbody").show("slow");
          oc=1;
        }else{
            $("#tabla-dinam tbody").hide("slow");
          oc=0;
        }
    })
    $("#cbx_mas_personas").change(function () {
        var n = $(this).val();
        if (n.length != 0) {
            CrearNpersonas(n);
        } else {
            $("#maspersona").html("");
            p = 0;
        }

    });
    $("#cbx_metodo_pago").change(function () {
        var n = $(this).val();
        Continuar(n);

    });
    ActivarQuitarEspacios();

});

function Traer_Server() {
    // return "http://inscripcionescrecs.cuc.edu.co/";
   return "http://localhost/InscripcionEvento/";
}

$("#guardarinscripcion").submit(function () {

    GuardarInscripcion();

    return false;
});
$("#buscar_inscri").click(function () {
    var cc = $("#numero_id_buscar").val();
    if (cc.length == 0) {
        Limpiar_focus("#ee", "<b>!Error!</b> Ingrese Numero de Identificacion.", "danger");
    } else {
        Buscar_Inscripcion(cc);
    }

    return false;
});
function GuardarInscripcion() {


    //Tomamos los datos del formulario de inscripcion
    var formData = new FormData(document.getElementById("guardarinscripcion"));
    formData.append("nump", p);
    //  Enviamos el formulario al controlador     
    $.ajax({
        url: server + "index.php/pages/GuardarInscripcion",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    }).done(function (datos) {

        if (datos == 1) {

            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Nombres.", "danger");

        } else if (datos == 2) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Apellidos.", "danger");
        } else if (datos == 11) {

            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> El Campo Nombres No puede Contener Numeros.", "danger");

        } else if (datos == 12) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> El Campo Apellidos No puede Contener Numeros.", "danger");
        } else if (datos == 13) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Seleccione Tipo Idetificacion.", "danger");
        } else if (datos == 14) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese  Idetificacion.", "danger");
        } else if (datos == 15) {
            var mensaje = "<b>!Error!</b> El Numero de Identificacion " + $("#idetificacion").val() + " Ya Tiene Una Inscrpcion.";
            Limpiar_focus("#mensaje_error_bien", mensaje, "danger");
        } else if (datos == 16) {
            var mensaje = "<b>!Error!</b> Ingrese Nacionalidad.";
            Limpiar_focus("#mensaje_error_bien", mensaje, "danger");
        } else if (datos == 17) {
            var mensaje = "<b>!Error!</b> Ingrese Profesion.";
            Limpiar_focus("#mensaje_error_bien", mensaje, "danger");
        } else if (datos == 18) {
            var mensaje = "<b>!Error!</b> Seleccione Nivel de Formacion.";
            Limpiar_focus("#mensaje_error_bien", mensaje, "danger");
        } else if (datos == 3) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Empresa donde Trabaja.", "danger");
        } else if (datos == 4) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese NIF O CIF.", "danger");
        } else if (datos == 5) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Telefono.");
        } else if (datos == 6) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Direccion.", "danger");
        } else if (datos == 7) {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Codigo Postal.", "danger");
        } else if (datos == 8) {

            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Correo.", "danger");
        } else if (datos == 10) {

            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Ingrese Ciudad-Pais.", "danger");
        } else if (datos == 0) {

            Limpiar_focus(".des_", "<b>!Bien!</b>  Inscripcion Guardada Con Exito, Su inscripcion es valida una vez realize el pago.", "success");

            $("#mensaje_error_bien").hide("slow");
            $("#guardarinscripcion").get(0).reset();
            $("#maspersona").html("");
            p = 0;
            $("#cbx_mas_personas").val("");
            $("#cbx_n_formacion").val("");
            $("#cbx_tipo_id").val("");
            $("#myModal_pago").modal("show");

        } else {
            Limpiar_focus("#mensaje_error_bien", "<b>!Error!</b> Error al Guardar la Inscripcion.", "danger");
        }

    });

}

function Continuar(pago) {

    if (pago == 1) {
        $("#pagar").show("slow");
        $("#pagar_banco").hide("slow");
    } else {
        $("#pagar_banco").show("slow");
        $("#pagar").hide("slow");
    }
}
function Regresar() {
    $("#pagar").hide("slow");
    $("#pagar_banco").hide("slow");
    $("#Incr").show("slow");
}
function MasPersona() {
    if (p == 0) {
        $("#maspersona").append("<br>");
    }
    $("#maspersona").append('<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Datos Persona ' + (p + 1) + '</h3></div><div class="panel-body"><div class="form-group"><div class="input-group"><input type="text"  name="nombres' + p + '" required="" class="form-control" placeholder="Nombres"><span class="input-group-addon">-</span><input type="text"  name="apellidos' + p + '" required="" class="form-control" placeholder="Apellidos"> </div></div><div class="form-group"><div class="input-group"> <input list= "lst_tipo_id" placeholder="Tipo Identificacion *" class="form-control" required=""  name="tipo_identificacion' + p + '"><span class="input-group-addon">-</span><input type="number"  name="identificacion' + p + '" required="" class="form-control" placeholder="Identificacion *"></div><select name="otrotaller' + p + '"  class="form-control mar-3"><option value="">¿Asistirá a un taller?</option><option value="COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS">CÓMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS</option><option value="GESTION DE DATOS DE CITAS: WOS Y SCOPUS FRENTE A GOOGLE SCHOLAR">GESTIÓN DE DATOS DE CITAS: WOS Y SCOPUS FRENTE A GOOGLE SCHOLAR</option></select></div></div></div>');
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
    ActivarQuitarEspacios();
}
function Limpiar_focus(sele, mensaje, tipo_me) {


    $(sele).html(mensaje);
    $(sele).show("slow");
    $(sele).val("");
    $(sele).focus();
}
function ActivarQuitarEspacios() {
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
}
function Buscar_Inscripcion(cc) {
    $.ajax({
        url: server + "index.php/pages/Buscar_Incripcion",
        dataType: "json",
        data: {
            identificacion: cc
        },
        type: "post",
    }).done(function (datos) {
        if (datos == true) {
            $("#myModal_pago").modal("show");
            Limpiar_focus(".des_", "<b>!Bien!</b>  Inscripcion Encontrada, Su inscripcion es valida una vez realize el pago.", "success");
            $("#ee").hide("slow");
            $("#mensaje_error_bien").hide("slow");
        } else {
            Limpiar_focus("#ee", "<b>!Error!</b> La Inscripcion No se Encuentra Registrada.", "danger");
        }
    });
}
function Listar_Inscripciones() {


    var myTable = $("#tabla_inscripciones").DataTable({
        "destroy": true,
        "ajax": {
            url:  server + "index.php/pages/Listar_Inscripciones",
            dataType: "json",
            type: "post",
        }, "columns": [
            {"data": "fecha_registro"},
            {"data": "nombres"},
            {"data": "apellidos"},
            {"data": "tipo_identificacion"},
            {"data": "identificacion"},
            {"data": "telefono"},
            {"data": "correo"},
            {"data": "nacionalidad"},
            {"data": "profesion"},
            {"data": "nivel_formacion"},
            {"data": "empresa_trabaja"},
            {"data": "cargo"},
            {"data": "direccion"},
            {"data": "codigo_postal"},
            {"data": "ciudad_pais"},
            {"data": "otro_taller"},
            {"data": "comentarios"},
        ],
        "language": idioma,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    myTable.column(0).visible(false);
    myTable.column(8).visible(false);
    myTable.column(9).visible(false);
    myTable.column(11).visible(false);
    myTable.column(12).visible(false);
    myTable.column(13).visible(false);
    myTable.column(14).visible(false);
    myTable.column(15).visible(false);
    myTable.column(16).visible(false);

    $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();

        // Get the column API object
        var column = myTable.column($(this).attr('data-column'));

        // Toggle the visibility
        column.visible(!column.visible());
    });

}
function prueba(cc) {
    alert(cc)
    $.ajax({
        url:  server + "index.php/pages/Listar_Inscripciones",
        dataType: "json",
        type: "post",
    }).done(function (datos) {
        alert(datos)
    });
}