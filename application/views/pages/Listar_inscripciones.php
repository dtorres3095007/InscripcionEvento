<div class="col-md-12 text-center"> <h3>INSCRITOS CRECS 2018</h3></div>
<div class="table-responsive col-sm-12 col-md-12 mar-3" >
    <table class="table table-bordered table-hover table-condensed table-responsive" id="tabla_inscripciones"  cellspacing="0" width="100%" style="">
        <thead class="ttitulo ">
            <tr class="filaprincipal"><td>Fecha Registro</td><td>Nombres</td><td>Apellidos</td><td>Tipo Identi.</td><td>Identificacion</td><td>telefono</td><td>correo</td><td>nacionalidad</td><td>Profesion</td><td>Nivel_Formacion</td><td>empresa_trabaja</td><td>Cargo</td><td>Direccion</td><td>Codigo_Postal</td><td>ciudad_Pais</td><td>Taller</td><td>Comentarios</td></tr>
        </thead>
        <tbody class="pointer">
        </tbody>
    </table>
</div>
<div class="col-md-6 mar-3 dinamica-col">
    <table class="table table-bordered table-hover" id="tabla-dinam">
        <thead>
            <tr>
                <th colspan="5" class="pointer" id="mostrar_ocultar"><span class="glyphicon glyphicon-eye-open"> </span> Mostrar-ocultar Columnas </th>
            </tr>
        </thead>
        <tbody class="oculto">
            <tr>
                <td><a class="toggle-vis pointer" data-column="0">Fecha_Registro</a></td>
                <td><a class="toggle-vis pointer" data-column="1">Nombres</a></td>
                <td><a class="toggle-vis pointer" data-column="2">Apellidos</a></td>
                <td><a class="toggle-vis pointer" data-column="3">Tipo_Identi.</a></td>
                <td><a class="toggle-vis pointer" data-column="4">Identificacion</a></tr>
            <tr>
                <td><a class="toggle-vis pointer" data-column="5">Telefono</a></td>
                <td><a class="toggle-vis pointer" data-column="6">Correo</a></td>
                <td><a class="toggle-vis pointer" data-column="7">Nacionalidad</a></td>
                <td><a class="toggle-vis pointer" data-column="8">Profesion</a></td>
                <td><a class="toggle-vis pointer" data-column="9">Nivel_Formacion</a></td></tr>
            <tr>
                <td><a class="toggle-vis pointer" data-column="10">Empresa_Trabaja</a></td>
                <td> <a class="toggle-vis pointer" data-column="11">Cargo</a></td>
                <td><a class="toggle-vis pointer" data-column="12">Direccion</a></td>
                <td><a class="toggle-vis pointer" data-column="13">Codigo_Postal</a></td>
                <td><a class="toggle-vis pointer" data-column="14">Ciudad_Pais</a></td></tr>
            <tr> 
                <td><a class="toggle-vis pointer" data-column="15">Taller</a></td>
                <td><a class="toggle-vis pointer" data-column="16">Comentarios</a></td></tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="personal_multiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 90%">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-user"></span>PERSONAS POR INSCRIPCION</h3>

            </div>
            <div class="modal-body">
                <div class="table-responsive" >
                    <table class="table table-bordered table-hover table-condensed table-responsive" id="tabla_inscripciones_multiple"  cellspacing="0" width="100%" style="">
                        <thead class="ttitulo ">
                            <tr class="filaprincipal"><td>Nombre Completo</td><td>Tipo Identi.</td><td>Identificacion</td><td>Taller</td></tr>
                        </thead>
                        <tbody class="pointer">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
