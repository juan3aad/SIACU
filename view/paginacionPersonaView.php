<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>

<body>
<header id="titulo">

        <h3>LISTADO DE AFILIADOS</h3>
    </header>
    
   <form name='frmlistaPersona' id='frmlistaPersona' action=''> 
       
       
       
       
       
       
                                                <!--MODAL PARA ACTUALIZAR DATOS PERSONALES -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">
                                                            <div id="TituloModal">Formulario de Actualización 5</div>
                                                           
                                                        </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">id_Afiliado: </span>
                                                            <input type="text" name="tmid" id="tmid" value="" class="letras"  maxlength="20">
                                                        </div>
                         
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-success">Estado Civil:<button class="btn btn-primary btn-xs" type="button" id="beditar2" name="beditar2" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                                            <input type="text" id="tmestadocivil" name="tmestadocivil" class="form-control input-lg" readonly="readonly">
                                                            <input type="hidden" id="tsnombreAnt" name="tsnombreAnt" class="form-control input-lg" readonly="readonly">
                                                        </div>
                                                            
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Genero:</span> 
                                                            <input type="text" id="tmgenero" name="tmgenero" class="form-control input-lg" readonly="readonly">
                                                            <input type="hidden" id="tsnombreAnt" name="tsnombreAnt" class="form-control input-lg" readonly="readonly">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Municipio: </span>
                                                            <input type="text" name="tmmunicipio" id="tmmunicipio" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                            
                                                        </div> 
                                                          
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Dirección: </span>
                                                            <input type="text" name="tmdireccion" id="tmdireccion" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Fecha Nacimiento:: </span>
                                                            <input type="text" name="tmfechanac" id="tmfechanac" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Tipo Documento: </span>
                                                            <input type="text" name="tmtipodoc" id="tmtipodoc" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Documento: </span>
                                                            <input type="text" name="tmdocumento" id="tmdocumento" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        </div>
                                                          
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Primer Nombre: </span>
                                                            <input type="text" name="tmpnombre" id="tmpnombre" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Segundo Nombre: </span>
                                                            <input type="text" name="tmsnombre" id="tmsnombre" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Primer Apellido: </span>
                                                            <input type="text" name="tmpapellido" id="tmpapellido" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Segundo Apellido: </span>
                                                            <input type="text" name="tmsapellido" id="tmsapellido" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Telefono: </span>
                                                            <input type="text" name="tmtelefono" id="tmtelefono" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Celular: </span>
                                                            <input type="text" name="tmcelular" id="tmcelular" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                                            <span class="label label-default">Email: </span>
                                                            <input type="text" name="tmemail" id="tmemail" value="" class="letras"  maxlength="20">
                                                        </div> 
                                                        </div>
                                                     <!---->  
                                                                                                            
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" id="bguardarModal1" name="bguardarModal1" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              
                                        <!--FINF MODAL PARA ACTUALIZAR DATOS PERSONALES  ---->
                                        
                                        
                                         <!--MODAL PARA ACTUALIZAR ALGUNOS CAMPOS -->
                                                <div class="modal" id="myModal2" role="dialog">
                                                  <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">
                                                            <div id="TituloModal2"></div>
                                                           
                                                        </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <div id="capaDatos" name="capaDatos">
                                                            <input type="text" name="tdatosp" id="tdatosp" value="" class="letras"  maxlength="20">
                                                        </div>
                                                        <div id="capaFechaNac" name="capaFechaNac">
                                                            <input type="text" name="tmfechanac" id="tmfechanac" value="" maxlength="10" readonly="readonly">
                                                        </div>
                                                        <div id="capaSexo" name="capaSexo">
                                                            <select id="sSexo" name="sSexo">
                                                                <option value="F">Femenino</option>
                                                                <option value="M">Masculino</option>
                                                            </select>
                                                        </div>
                                                          
                                                        <div id="capaTipoDoc" name="capaTipoDoc">
                                                            <select id="sTipoDoc" name="sTipoDoc">
                                                                <option value="CC">[CC]-Cedula de Ciudadania</option>
                                                                <option value="TI">[TI]Tarjeta de Identidad</option>
                                                                <option value="RC">[RC]Registro Civil</option>
                                                            </select>
                                                        </div>
                                                          
                                                        <div id="capaDocumento" name="capaDocumento">
                                                            <input type="text" name="tmdocumento" id="tmdocumento" value=""  class="number" maxlength="12">
                                                        </div>
                                                          <div id="capaDepartamento" name="capaDepartamento">
                                                              <p>
                                                                <label>Departamento</label>
                                                                <select id="sDepartamento" name="sDepartamento" >
                                                                    <option value='0'>Selecciona Uno...</option>
                                                                </select>
                                                            </p>
                                                              
                                                          </div>  
                                                        <div id="capaMunicipio" name="capaMunicipio">
                                                            
                                                            <p>
                                                            <label>Municipio</label>
                                                            <select name="sMunicipio" id="sMunicipio">
                                                                <option value='0'>Selecciona Uno...</option>
                                                            </select>
                                                            </p>
                                                        </div>
                                                          
                                                        <div id="capaDireccion" name="capaDireccion">
                                                            <input type="text" name="tmdireccion" id="tmdireccion" value="" maxlength="70">
                                                        </div>
                                                          
                                                        <div id="capaTelefono" name="capaTelefono">
                                                            <input type="text" name="tmtelefono" id="tmtelefono" value=""  class="number" maxlength="12">
                                                        </div>
                                                        
                                                        <div id="capaEmail" name="capaEmail">
                                                            <input type="email" name="tmemail" id="tmemail" value="" maxlength="60">
                                                        </div>
                                                        
                                                        <div id="capaCelular" name="capaCelular">
                                                            <input type="text" name="tmcelular" id="tmcelular" value="" class="number" maxlength="10">
                                                        </div>
                                                          
                                                          
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" id="bguardarModal2" name="bguardarModal2" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              
                                        <!--FINF MODAL PARA ACTUALIZAR Especiales  ---->
                                        
     


       <article id="contenido">
    
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_listaPersonas">
                    <thead>
                    <tr>
                        <th colspan='2'>TOOLS</th>
                        <th>ID</th>
                        <th>ESTADO CIVIL</th>
                        <th>GENERO</th>
                        <th>MUNICIPIO</th>
                        <th>DIRECCION</th>
                        <th>FECHA_NACIMIENTO</th>
                        <th>TIPO DOC</th>
                        <th>DOCUMENTO</th>
                        <th>P. NOMBRE</th>
                        <th>S. NOMBRE</th>
                        <th>P. APELLIDO</th>
                        <th>S. APELLIDO</th>
                        <th>TELEFONO</th>
                        <th>CELULAR</th>
                        <th>EMAIL</th>
                        
                     </tr>
                    </thead>
                    <tfoot>
                    <tr>
                       
                        <th colspan="2"></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                    </tr>
                    </tfoot>
                <tbody>
            
            <?php foreach($allpersonas as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                    <tr>
                    <td>
                    <a href="<?php echo $helper->url("Tblpersona","borrar"); ?>&id=<?php echo $user->id_persona; ?>" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                    <td>
                    <!--<a href="<?php //echo $helper->url("Tblpersona","editar"); ?>&id=<?php ///echo $user->id_persona; ?>" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal" > <i class="glyphicon glyphicon-pencil"></i></a> -->
                        <a href="#" class="hrow"><button class="btn btn-primary btn-xs" type="button" id="beditarAfil" name="beditarAfil" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil"></span></button></a> 
                    </td>
                    <td><?php echo $user->id_persona; ?> </td>
                    <td><?php echo $user->id_estado_civil; ?> </td>
                    <td><?php echo $user->id_sexo; ?> </td>
                    <td><?php echo $user->id_municipio; ?> </td>
                    <td><?php echo $user->direccion; ?></td>
                    <td><?php echo $user->fecha_nacimiento; ?></td>
                    <td><?php echo $user->tipo_identificacion; ?></td>
                    <td><?php echo $user->numero_identificacion; ?></td>
                    <td><?php echo $user->primer_nombre; ?></td>
                    <td><?php echo $user->segundo_nombre; ?></td>
                    <td><?php echo $user->primer_apellido; ?></td>
                    <td><?php echo $user->segundo_apellido; ?></td>
                    <td><?php echo $user->telefono; ?></td>
                    <td><?php echo $user->celular; ?></td>
                    <td><?php echo $user->email; ?></td>
                    
                    
                
                
                   </tr>
            <?php } ?>
                
          
                   </tbody>  
            </table>
    
</article>    
      </form>
     
</body>               
<?php
    }
    else
    {
        session_destroy();
     ?>
     <div class="alert alert-warning">Debe iniciar sessión</div>

     <?php
    }
?>