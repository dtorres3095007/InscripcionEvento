
<div class="container col-md-7 mar-3"  id="Incr">


   <!-- <div class="alert alert-success pointer" ><span class="glyphicon glyphicon-share"></span> Ya Cuento con Una Inscripcion, ir al Pago.
        <input class="mar-3" type="radio" name="pago2" value="1" onclick="Continuar(1)"> Via PayPal - 
        <input class="mar-3" type="radio" name="pago2" value="2" onclick="Continuar(2)"> Transferencia Bancaria<br>
    </div>-->
    <form id="guardarinscripcion">
        <div class="panel panel-primary" >
            <div class="panel-heading header_panel centro">
                <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> INSCRIPCIONES CRECS 2018</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <div class="input-group">
                        <input type="text" id="nombres" name="nombres" autofocus="" required="" class="form-control" placeholder="Nombres *">
                        <span class="input-group-addon">-</span>
                        <input type="text" id="apellidos" name="apellidos" required="" class="form-control" placeholder="Apellidos *">
                    </div>
                </div>


                <div class="form-group">

                    <div class="input-group">
                        <input type="text" class="form-control" required=""id="cbx_tipo_id"  list= "lst_tipo_id" placeholder="Tipo Identificacion" name="tipo_identificacion"> 
                        <datalist id="lst_tipo_id">
                            <option value="Cedula de Ciudadania">
                            <option value="Cedula de Extranjeria">
                            <option value="Documento Nacional de Identidad">
                        </datalist>
                        <span class="input-group-addon">-</span>
                        <input type="number" id="idetificacion" name="identificacion" required="" class="form-control" placeholder="Identificacion *">

                    </div>
                </div>


                <div class="form-group">

                    <div class="input-group">
                        <input type="text" id="nacionalidad" name="nacionalidad" required="" class="form-control" placeholder="Nacionalidad *">
                        <span class="input-group-addon">-</span>
                        <input type="text" id="profesion" name="profesion" required="" class="form-control" placeholder="profesion *">
                    </div>
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <input id="correo" name="correo" type="email" required="" class="form-control"  placeholder="Correo Electronico *">
                        <span class="input-group-addon">-</span>
                        <input id="telefono" name="telefono" required="" type="number" class="form-control" placeholder="Telefono (Especificar el indicativo del país y ciudad) *">

                    </div>
                </div>


                <select name="formacion" class="form-control mar-3" id="cbx_n_formacion" required="">
                    <option value="">Nivel de Formacion *</option>
                    <option value="Pregrado">Pregrado</option>
                    <option value="Postgrado">Postgrado</option>
                    <option value="Maestria">Maestria</option>
                    <option value="Doctorado">Doctorado</option>
                    <option value="Posdoctorado">Posdoctorado</option>
                </select>
                <select class="form-control mar-3" id="cbx_mas_personas">
                    <option value="">¿Inscripcion Multiple?</option>
                    <option value="2">2 personas -10%</option>
                    <option value="3">3 personas -15%</option>
                    <option value="4">4 personas o mas -20%</option>
                </select>

                <div id="maspersona" >

                </div>
                <div class="form-group">

                    <div class="input-group mar-3">
                        <input type="text" id="empresa_trabaja" name="empresa_trabaja"  required="" class="form-control" placeholder="Institucion o empresa donde Trabaja *">

                        <span class="input-group-addon">-</span>
                        <input type="text" class="form-control" id="cargo_empresa"  list = "lst_cargos" placeholder="Cargo Empresa" name="cargo"> 
                        <datalist id="lst_cargos">
                            <option value="Docente">
                            <option value="Investigador">
                            <option value="Administrativo">

                        </datalist>
                    </div>
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <input type="text" id="direccion" name="direccion" required="" class="form-control" placeholder="Direccion Empresa(calle y numero) *">

                        <span class="input-group-addon">-</span>
                        <input type="text" id="postal" name="postal" required="" class="form-control"  placeholder="Domicilio Empresa(Codigo Postal) *">

                    </div>
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <input type="text" id="ciudad_pais" name="ciudad_pais" required="" class="form-control" placeholder="Ciudad - Pais Empresa *">
                        <span class="input-group-addon">-</span>
                        <input type="text" name="empresa_paga" class="form-control" placeholder="Institucion o empresa que hará el pago(si procede)">

                    </div>
                </div>

                 <!--<input type="text" id="codigo_emp_paga"  required="" name="codigo_emp_paga" class="form-control mar-3" placeholder="NIF O CIF *">
                -->   <select name="otrotaller"  class="form-control mar-3">
                    <option value="">¿Asistirá a un taller?</option>
                    <option value="COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS">CÓMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS</option>
                    <option value="GESTION DE DATOS DE CITAS: WOS Y SCOPUS FRENTE A GOOGLE SCHOLAR">GESTIÓN DE DATOS DE CITAS: WOS Y SCOPUS FRENTE A GOOGLE SCHOLAR</option>

                </select>
                <textarea name="comentarios"  class="form-control mar-3"  placeholder="Comentarios"></textarea>



                <p class="mar-3" id="campo_obli"> <b> *</b> Campos Obligatorios</p>

                <div class="alert alert-danger oculto" id="mensaje_error_bien">...</div>
            </div>

            <div class="panel-footer"><button class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar y Continuar</button>  <button type="reset" class="btn btn-danger" ><span class="glyphicon glyphicon-refresh"></span> Limpiar</button></div>

        </div>



    </form>

</div>











<div class="alert alert-info col-md-4 mar-3 text-justify" >
    El costo de la inscripción son 100USD (pagos internacionales) o $285.600 (pagos nacionales), e incluye los cafés y refrescos de los descansos, y la comida del jueves día 3 de mayo. A este costo, si está interesado en asistir a alguno de los dos talleres tendrá que sumar la cantidad de 50 usd o $142.800 por taller.

    Debido a los gastos de organización y a lo ajustado del precio, no es posible hacer descuentos a los autores de ponencias, comunicaciones y posters.

    Este año aplicamos una política de precios que intenta fomentar la participación en grupo, con descuentos por inscripciones simultáneas, con una única factura:
    <BR>
    <ul class=" mar-3">

        <li>2 Personas -10% = 180 USD o $514.080</li>
        <li>3 Personas: -15% = 255 USD o $728.280</li>
        <li>4 Personas o más: -20% sobre tarida de inscripción (TRM:$2.856)</li>

    </ul>
    <BR>
    A estos costes habrá que sumar las inscripciones por talleres (de 50 usd o $142.800 por taller y persona).

    Para cualquier duda, contactar con Lauren J. Castro Bolaño Cel: +57 300 844 14 02 o al correo electrónico lcastro24@cuc.edu.co


</div>
<div class="alert alert-warning col-md-4 mar-3" >

    <p><b>Ya Cuento con una Inscripcion, ir al pago:</b></p>  
    <div class="form-group" >

        <div class="input-group">
            <input id="numero_id_buscar" class="form-control" id="buscar_por_cc" required="" type="number" placeholder="Numero Identificacion">
            <span class="input-group-addon glyphicon glyphicon-search red" id="buscar_inscri"></span>

        </div>
    </div>
    <div class="alert alert-danger oculto" id="ee">...</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal_pago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-usd"></span>PAGAR INSCRIPCION</h3>

            </div>
            <div class="modal-body">
                <div class="des_ alert alert-success oculto"></div>
                <span>Metodos de Pago: </span>
                <select  class="form-control" name="pago" id="cbx_metodo_pago">
                    <option value="1">Via PayPal (PAGOS INTERNACIONALES)</option>
                    <option value="2">Transferencia Bancaria (PAGOS NACIONALES)</option>

                </select>


                <div class="mar-3" id="pagar" >

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <table>
                                    <tr><td><input type="hidden" name="on0" value="PRECIOS DEL EVENTO CRECS" PRECIOS DEL EVENTO CRECS</td></tr><tr><td><select name="os0" class="form-control">>
                                                <option value="INSCRIPCION">INSCRIPCION $100.00 USD</option>
                                                <option value="INSCRIPCION + TALLER">INSCRIPCION + TALLER $150.00 USD</option>
                                                <option value="INSCRICION 2 PERSONAS">INSCRIPCION 2 PERSONAS $180.00 USD</option>
                                                <option value="INSCRIPCION 3 PERSONAS">INSCRIPCION 3 PERSONAS $255.00 USD</option>
                                                <option value="INSCRIPCION 4  PERSONAS O MAS">INSCRIPCION 4  PERSONAS O MAS $320.00 USD</option>
                                                <option value="INSCRICION 2 PERSONAS + TALLER">INSCRIPCION 2 PERSONAS + TALLER $280.00 USD</option>
                                                <option value="INSCRICION 3 PERSONAS + TALLER">INSCRIPCION 3 PERSONAS + TALLER $405.00 USD</option>
                                                <option value="INSCRIPCION 4  PERSONAS O MAS + TALLER">INSCRIPCION 4  PERSONAS O MAS + TALLER $520.00 USD</option>
                                            </select> </td></tr>
                                </table>
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                       ">
                                <input  class="btn btn-primary mar-3" border="0" type="submit" value="Pagar Ahora">
                             
                            </form>

                        </div>
                    </div>



                </div>

                <div class="oculto" id="pagar_banco" >

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <p>Realizar transferencia bancaria o consignación a:</p>
                            <p>Empresa: CORPORACION UNIVERSIDAD DE LA COSTA - CUC</p>
                            <p>Cuenta Ahorros: 024100002351</p>
                            <p>Banco: DAVIVIENDA</p>
                            <button type="button" class="btn btn-primary"data-dismiss="modal"><span class="glyphicon glyphicon-repeat"></span> Terminar</button>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


