
<div class="container col-md-7 mar-3"  id="Incr">


    <div class="alert alert-success pointer" onclick="Continuar()"><span class="glyphicon glyphicon-share"></span> Ya Cuento con Una Inscripcion, ir al Pago.</div>
    <form id="guardarinscripcion">
        <div class="panel panel-default" >
            <div class="panel-heading header_panel centro">
                <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> INSCRIPCIONES CRECS 2018</h3>
            </div>
            <div class="panel-body">
                <input type="text" id="nombres" name="nombres" autofocus="" required="" class="form-control mar-3" placeholder="Nombres *">
                <input type="text" id="apellidos" name="apellidos" required="" class="form-control mar-3" placeholder="Apellidos *">
                <select class="form-control mar-3" id="cbx_mas_personas">
                    <option value="">Inscripcion Multiple</option>
                    <option value="2">2 personas -10%</option>
                    <option value="3">3 personas -15%</option>
                    <option value="4">4 personas o mas -20%</option>
                </select>

                <div id="maspersona" >

                </div>

                <input type="text" id="empresa_trabaja" name="empresa_trabaja"  required="" class="form-control mar-3" placeholder="Institucion o empresa donde Trabaja *">
                <input id="correo" name="correo" type="email" required="" class="form-control mar-3"  placeholder="Correo Electronico *">
                <input type="text" name="empresa_paga" class="form-control mar-3" placeholder="Institucion o empresa que hará el pago(si procede)">
                <input type="text" id="codigo_emp_paga"  required="" name="codigo_emp_paga" class="form-control mar-3" placeholder="NIF O CIF *">
                <input id="telefono" name="telefono" required="" type="number" class="form-control mar-3" placeholder="Telefono *">
                <input type="text" id="direccion" name="direccion" required="" class="form-control mar-3" placeholder="Direccion Empresa(calle y numero) *">
                <input type="text" id="postal" name="postal" required="" class="form-control mar-3"  placeholder="Domicilio Empresa(Codigo Postal) *">
                <input type="text" id="ciudad_pais" name="ciudad_pais" required="" class="form-control mar-3" placeholder="Ciudad - Pais Empresa *">
                <textarea name="otrotaller"  class="form-control mar-3"  placeholder="Si va asistir a algún taller indique si es el de mañana o el de tarde o los dos"></textarea>

                <textarea name="comentarios"  class="form-control mar-3"  placeholder="Comentarios"></textarea>
                <p class="mar-3"> <b> *</b> Campos Obligatorios</p>


                <div class="alert alert-danger oculto" id="mensaje_error_bien">...</div>
            </div>

            <div class="panel-footer"><button class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar y Continuar</button>  <button type="reset" class="btn btn-danger" ><span class="glyphicon glyphicon-refresh"></span> Limpiar</button></div>

        </div>



    </form>

</div>





<div class="container col-md-7 oculto mar-3" id="pagar" >

    <div class="panel panel-default">
        <div class="panel-heading header_panel centro" >
            <h3 class="panel-title"><span class="glyphicon glyphicon-usd"></span> PAGAR INSCRIPCION</h3>

        </div>
        <div class="panel-body">
            <div id="des_"></div>
            <div class="alert alert-warning">Metodo de pago: Vía PayPal</div>
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
                <button type="button" class="btn btn-danger" onclick="Regresar()"><span class="glyphicon glyphicon-repeat"></span> Cancelar</button>
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">

            </form>

        </div>
    </div>



</div>
<div class="alert alert-warning col-md-4 mar-3 text-justify" >
    El coste de la inscripción es de 100 dolares, e incluye los cafés y refrescos de los descansos, y la comida del jueves día 4 de mayo. A este coste, si está interesado en asistir a alguno o a los dos talleres tendrá que sumar la cantidad de 50 dolares por taller.
    ​Debido a los gastos de organización y a lo ajustado del precio, no es posible hacer descuentos a ​los autores de ponencias, comunicaciones y posters.

    Este año aplicamos una política de precios que intenta fomentar la participación en grupo, con descuentos por inscripciones simultáneas, con una única factura:
   
    <ul class=" mar-3">

        <li>2 personas -10% = *** Dolares</li>
        <li>3 personas: -15% = *** Dolares</li>
        <li>4 personas o más: -20% = *** Dolares</li>

    </ul>
    A estos costes habrá que sumar las inscripciones por talleres (30 euros por taller y persona).


</div>
