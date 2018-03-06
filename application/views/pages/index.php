
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
                <div class="des_"></div>
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
                                <input type="hidden" name="hosted_button_id" value="FYSVSKSHFPLEE">

                                <table>

                                    <tr><td><input type="hidden" name="on0" value="EVENTOS" >EVENTOS</td></tr><tr><td><select name="os0" class="form-control">

                                                <option value="INSCRIPCION">INSCRIPCION $100.00 USD</option>

                                                <option value="INSCRIPCION + TALLER">INSCRIPCION + TALLER $150.00 USD</option>

                                            </select> </td></tr>

                                </table>
                                <br>
                                <input type="hidden" name="currency_code" value="USD">

                   <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                -->
                                <button type="submit" alt="PayPal - The safer, easier way to pay online!" class="btn btn-primary">Pagar Ahora</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-repeat"></span> Cancelar</button>
                                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">

                            </form>

                        </div>
                    </div>



                </div>

                <div class="oculto" id="pagar_banco" >

                    <div class="panel panel-default">

                        <div class="panel-body">

                             <p>Empresa: CORPORACION UNIVERSIDAD DE LA COSTA - CUC</p>
                            <p>Cuenta Ahorros: 024100002351</p>
                            <button type="button" class="btn btn-primary"data-dismiss="modal"><span class="glyphicon glyphicon-repeat"></span> Terminar</button>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
