<?php
include_once('php/conexion/conexion.php');
include_once('php/global/cabecera.php');


?>
<div class="container">
    <h1>Formulario de registro</h1>
    <form method="post" action="php/crud/crear.php">
        <div class="row">
            <!-----------------------------------1------------------------------------->
            <div class="cool-4">
                <label class=" col-form-label">Denominacion o Razon Social de la Distribuidora</label>
                <select class="form-control" name="campo[0]" id="denominacion_razon_social_de_distribuidora">
                    <option>AS PREMIUM SA DE CV</option>
                </select>
            </div>
            <!---->
            <div class="col-4">
                <label class=" col-form-label">Fecha:</label>
                <input type="date" name="campo[1]" id="fecha" class="form-control">
            </div>
            <!-----------------------------------1------------------------------------->

            <!-----------------------------------2------------------------------------->
            <div class="col-12 mt-5">
                <div class="alert alert-primary mt-3" role="alert">
                    <center>Por este medio proporciono los datos y documentos requeridos con la unica finalidad de identificar a la persona moral que represento.</center>
                </div>
                <!-----------------------------------2------------------------------------->

                <!-----------------------------------3------------------------------------->
                <div class="row">

                    <div class="col-4">
                        <label class="  col-form-label">Denominacion o Razon Social:</label>
                        <input type="text" name="campo[2]" id="denominacion_razon_social" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Pais de Nacionalidad:</label>
                        <input type="text" name="campo[3]" id="pais_nacionalidad" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class=" col-form-label">Fecha de Constitucion:</label>
                        <input type="date" name="campo[4]" id="Fecha_Constitucion" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">RFC:</label>
                        <input type="text" name="campo[5]" id="rfc" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class=" col-form-label">Fecha de Registro en el Registro Publico:</label>
                        <input type="date" name="campo[6]" id="fecha_registro_en_registro_publico" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Numero de la identificacion Fiscal:</label>
                        <input type="text" name="campo[7]" id="numero_de_identificacion_fiscal" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Domicilio:</label>
                        <input type="text" name="campo[8]" id="domicilio" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Actividad, Giro Mercantil u Objeto Social:</label>
                        <input type="text" name="campo[9]" id="act_gimer_ob_so" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Numero de Telefono del Domicilio:</label>
                        <input type="text" name="campo[10]" id="ptelefono_domicilio" class="form-control">
                    </div>
                    <!---->
                    <div class="col-4">
                        <label class="col-form-label">Correo Electronico:</label>
                        <input type="text" name="campo[11]" id="correo_electronico" class="form-control">
                    </div>
                </div>

                <!---->
                <!---->
                <div class="col-12 mt-5">
                    <div class="alert alert-primary mt-3" role="alert">
                        <center>Datos del representante o apoderado legal.</center>
                    </div>
                    <!-----------------------------------4------------------------------------->

                    <div class="row">
                        <div class="col-4">
                            <label class="col-form-label">No cliente:</label>
                            <input onchange="consultar()" type="text" id="nocliente" name="campo[12]" class="form-control">
                        </div>

                        <div class="col-4">
                            <label class="col-form-label">Nombre:</label>
                            <input type="text" id="nombre" name="campo[13]" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class=" col-form-label">Fecha de Nacimiento:</label>
                            <input type="date" id="fecha_de_nacimiento" name="campo[14]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">CURP:</label>
                            <input type="text" id="curp" name="campo[15]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">RFC:</label>
                            <input type="text" id="rfc1" name="campo[16]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Domicilio:</label>
                            <input type="text" id="domicilio1" name="campo[17]" class="form-control">
                        </div>
                        <!---->

                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Numero de telefono Particular:</label>
                            <input id="telefonoparti" type="text" name="campo[18]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Celular:</label>
                            <input type="text" id="celular" name="campo[19]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Numero de oficina:</label>
                            <input type="text" id="no_oficina" name="campo[20]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Correo Electronico:</label>
                            <input type="text" id="correoelectronico1" name="campo[21]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Nombre de la identificacion:</label>
                            <input type="text" id="nombre_de_la_identificacion" name="campo[22]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Autoridad que la emite:</label>
                            <input type="text" id="autoridad_que_la_emite" name="campo[23]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class="col-form-label">Numero de la identificacion:</label>
                            <input type="text" id="numero_de_la_identifiacion" name="campo[24]" class="form-control">
                        </div>
                        <!---->
                        <div class="col-4">
                            <label class=" col-form-label">Fecha del poder:</label>
                            <input type="date" id="fecha_del_poder" name="campo[25]" class="form-control">
                        </div>


                        <div class="col-12 mt-5">
                            <div class="alert alert-primary mt-3" role="alert">
                                <center> Agrego a la presente copia simple legible de los siguientes documentos previamente cotejados con originales o copias certificadas </center>
                            </div>

                            <div class="input-group mb-3">
                                <input type="checkbox" name="campo[26]" aria-label="Checkbox for following text input">
                                1. Acta constitutiva inscrita en el Registro Publico correspondiente.
                            </div>

                            <div class="input-group mb-3">
                                <input type="checkbox" name="campo[27]" aria-label="Checkbox for following text input">
                                2. Cedula de identificacion Fiscal o comprobante de asignacion del numero de identificacion fiscal, emitido por autoridad competente de su pais de nacionalidad.
                            </div>

                            <div class="input-group mb-3">
                                <input type="checkbox" name="campo[28]" aria-label="Checkbox for following text input">
                                3. Comprobante de Domicilio de la Persona Moral.
                            </div>


                            <div class="alert alert-primary mt-3" role="alert">
                                <label id="label">Mostrar Formulario</label>
                                <input onchange="ocultar()" id="MosOcu" type="checkbox">
                            </div>


                            <div class="col-12" id="ocultar" style="display: none;">
                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Agrego a la presente copia simple legible de los siguientes documentos previamente cotejados con originales o copias certificadas del Representante o Apoderado Legal.</center>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[29]" aria-label="Checkbox for following text input">
                                    1. Cedula de Identificacion Fiscal o comprobante de asignacion del numero de identificacion fiscal, emitido por autoridad competente de su pais de nacionalidad.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[30]" aria-label="Checkbox for following text input">
                                    2. Comprobante de domicilio.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[31]" aria-label="Checkbox for following text input">
                                    3. Instrumento que contenga los poderes del Representante o Apoderado Legal expedido por Fedatorio Publico.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[32]" aria-label="Checkbox for following text input">
                                    4. CURP.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[33]" aria-label="Checkbox for following text input">
                                    5. Identificacion Oficial vigente con fotografia, firma y en su caso domicilio de cada uno de los Representantes o Apoderados Legales.
                                </div>


                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Referencias Bancarias o Comerciales.</center>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">1. Nombre completo:</label>
                                        <input type="text" id="nombreC" name="campo[34]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Dom" name="campo[35]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero de telefono:</label>
                                        <input type="text" id="Parti" name="campo[36]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu" name="campo[37]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Ofi" name="campo[38]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Ext" name="campo[39]" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">2. Nombre completo:</label>
                                        <input type="text" id="nombreCO" name="campo[40]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Domi" name="campo[41]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero de telefono:</label>
                                        <input type="text" id="Partic" name="campo[42]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celul" name="campo[43]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Ofic" name="campo[44]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Exten" name="campo[45]" class="form-control">
                                    </div>
                                </div>

                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Referencias Personales.</center>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">3. Nombre completo:</label>
                                        <input type="text" id="nombreCOM" name="campo[46]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Domic" name="campo[47]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero de telefono:</label>
                                        <input type="text" id="Particu" name="campo[48]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu" name="campo[49]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Oficin" name="campo[50]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Extenci" name="campo[51]" class="form-control">
                                    </div>


                                    <div class="col-4">
                                        <label class="col-form-label">4. Nombre completo:</label>
                                        <input type="text" id="nombreC" name="campo[52]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Dom" name="campo[53]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero de telefono:</label>
                                        <input type="text" id="Parti" name="campo[54]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu" name="campo[55]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Offic" name="campo[56]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Extencione" name="campo[57]" class="form-control">
                                    </div>
                                </div>

                                <div class="alert alert-primary mt-3" role="alert">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="campo[58]" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">
                                            <center>
                                                <p><u><em>El acto u operacion celebrada con la precente agencia automotriz sera para beneficio propio y no tengo conocimiento de la existencia
                                                            de dueño beneficiario.</em></u></p>
                                            </center>
                                        </label>
                                    </div>
                                </div>


                                <div class="alert alert-secondary mt-3" role="alert">
                                    <center>
                                        <h6>
                                            <p><u><em>(En caso de conocer al Dueño Beneficiario, requisitar el reverso).</em></u></p>
                                        </h6>
                                    </center>
                                </div>

                                <div class="alert alert-secondary mt-3" role="alert">
                                    <center>
                                        <h6>
                                            <p>Declaro bajo protesta de decir verdad que todos y cada uno de los datos y documentos proporcionados son verdaderos..</p>
                                        </h6>
                                    </center>
                                </div>

                                <div class="row">
                                    <div class="col-5">
                                        <label class="col-form-label">Denomonacion o Razon Social del Cliente:</label>
                                        <input type="text" id="Denom" name="campo[59]" class="form-control">
                                    </div>

                                    <div class="col-5">
                                        <label class="col-form-label">Nombre completo del Apoderado O Representante Legal:</label>
                                        <input type="text" id="Apoderado" name="campo[60]" class="form-control">
                                    </div>

                                    <div class="col-5">
                                        <label class="col-form-label">Denomonacion o Razon Social del Cliente:</label>
                                        <input type="text" id="Denom" name="campo[61]" class="form-control">
                                    </div>

                                    <div class="col-5">
                                        Firma: _________________________________________________
                                    </div>

                                    <div class="col-5">
                                        Firma: _________________________________________________
                                        anverso
                                    </div>
                                </div>

                                <div class="alert alert-secondary mt-3" role="alert">
                                    <center>
                                        <p>
                                        <h6>Formato de identificacion del Dueño Beneficiario.</p>
                                        </h6>
                                    </center>
                                </div>

                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>
                                        <p>
                                        <h6>Por este medio proporciono los siguientes datos del Dueño Beneficiario.</p>
                                        </h6>
                                    </center>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">Nombre(s):</label>
                                        <input onchange="consultar()" type="text" id="NoCl" name="campo[62]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Apellido Paterno:</label>
                                        <input type="text" id="Apat" name="campo[63]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class=" col-form-label">Fecha de Nacimiento:</label>
                                        <input type="date" id="fech_nac" name="campo[64]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Nacionalidad:</label>
                                        <input type="text" id="Nacion" name="campo[65]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Actividad, ocupacion, profesion o giro del negocio al que se dedique:</label>
                                        <input type="text" id="AOPGDN" name="campo[66]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio en el lugar de residencia:</label>
                                        <input type="text" id="Domrec" name="campo[67]" class="form-control">
                                    </div>
                                    <!---->

                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">RFC:</label>
                                        <input id="RF" type="text" name="campo[68]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="ce" name="campo[69]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="no_part" name="campo[70]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Correo Electronico:</label>
                                        <input type="text" id="correoel" name="campo[71]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Nombre de la identificacion:</label>
                                        <input type="text" id="nombre_d_identificacion" name="campo[72]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Autoridad que la emite:</label>
                                        <input type="text" id="autoridad_emite" name="campo[73]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Numero de la identificacion:</label>
                                        <input type="text" id="numero_d_identifiacion" name="campo[74]" class="form-control">
                                    </div>
                                    <!---->
                                </div>


                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>En caso de ser extrangero y que cuente con domicilio en territorio nacional en donde reciba correspondencia, requisitar los siguientes datos.</center>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Domio" name="campo[75]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="no_partic" name="campo[76]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="celar" name="campo[77]" class="form-control">
                                    </div>
                                    <!---->
                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Ofina" name="campo[78]" class="form-control">
                                    </div>
                                    <!---->
                                </div>

                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Agrego a la presente copia simple legible de los siguientes documentos previamente cotejados con originales o copias certificadas.</center>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[79]" aria-label="Checkbox for following text input">
                                    1. Identificacion Oficial vigente con fotgrafia y firma.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[80]" aria-label="Checkbox for following text input">
                                    2. Cdula de Identificacion Fiscal o comprobante de asignacion del numero de identificacion fiscal, emitido por autoridad competente de su pais de nacionalidad.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[81]" aria-label="Checkbox for following text input">
                                    3. Comprobante (s) de Domicilio.
                                </div>

                                <div class="input-group mb-3">
                                    <input type="checkbox" name="campo[82]" aria-label="Checkbox for following text input">
                                    4. CURP.
                                </div>



                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Referencias Bancarias o Comerciales</center>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">1. Nombre completo:</label>
                                        <input type="text" id="nombreCo" name="campo[83]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Dom9" name="campo[84]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="Nopart2" name="campo[85]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu5" name="campo[86]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Ofice5" name="campo[87]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Exten5" name="campo[88]" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">2. Nombre completo:</label>
                                        <input type="text" id="nombreCO6" name="campo[89]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Domi6" name="campo[90]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="Partic6" name="campo[91]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celul6" name="campo[92]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Ofic6" name="campo[93]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Exten6" name="campo[94]" class="form-control">
                                    </div>
                                </div>

                                <div class="alert alert-primary mt-3" role="alert">
                                    <center>Referencias Personales.</center>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <label class="col-form-label">3. Nombre completo:</label>
                                        <input type="text" id="nombreCOM7" name="campo[95]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Domic7" name="campo[96]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="Particu7" name="campo[97]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu7" name="campo[98]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Oficin7" name="campo[99]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Extenci7" name="campo[100]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">4. Nombre completo:</label>
                                        <input type="text" id="nombreC8" name="campo[101]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Domicilio:</label>
                                        <input type="text" id="Dom8" name="campo[102]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Numero(s) de telefono: Particular</label>
                                        <input type="text" id="Parti8" name="campo[103]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Celular:</label>
                                        <input type="text" id="Celu8" name="campo[104]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Oficina:</label>
                                        <input type="text" id="Offic8" name="campo[105]" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label">Extencion:</label>
                                        <input type="text" id="Extencione8" name="campo[106]" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="row mt-5">
                                <div class="col-4">
                                    <button class="btn btn-primary" value="btn_enviar" type="submit">
                                        Enviar
                                    </button>
                                </div>
                            </div>
    </form>
</div>

<div class="container">


</div>


<?php
include_once('php/global/pie.php');
?>
<script>
    function ocultar() {
        let v;
        if ((v = $("#MosOcu:checked").val()) != null) {
            $('#label').text('Mostrar Formulario')
            $('#ocultar').show()
        } else {
            $('#label').text('Ocultar Formulario')
            $('#ocultar').hide()
        }
    }
</script>

<script>
    function consultar() {
        let nocliente = $('#nocliente').val()
        $.ajax({
            url: './php/crud/consultar.php',
            method: 'GET',
            async: true,
            data: {
                nocliente: nocliente,
                enviar: 'enviar',
            },
            dataType: "json",
            success: function(r) {
                console.log(r[0])
                console.log(r[0]['clinum'])

                $('#nombre').val(r[0]['clinombre'])
                /*$('#fecha_nacimiento').val()*/
                $('#curp').val(r[0]['clicurp'])
                $('#rfc1').val(r[0]['clirfc'])
                $('#domicilio1').val(r[0]['clidir'])
                $('#correo').val(r[0]['cliemail'])
                /*$('#telefonoparti').val(r[0]['clitel1'])*/


                /*
                nombre
                fecha_nacimiento
                curp
                rfc1
                domicilio1
                */
            }
        })
    }
</script>