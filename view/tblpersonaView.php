<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
   <body>
             
            
            <div class="container-fluid">
                <div id="mensaje" class="alert">
                    <!--  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
                </div>
                
            <form name="frmActualiza" id="frmActualiza" action="" method="post" class="form-horizontal" role="form">
                
                                                       
                                                <!-- Trigger the modal with a button -->
                                                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>-->
                                                <input type="hidden" name="tnumcontrol" id="tnumcontrol" value="">
                                                <input name="tmarca" id="tmarca" type="hidden">
                                                
                                            <!--MODAL CARGA DE ADJUNTOS -->
                                            <div id="myModal1" class="modal fade">
					        <div class="modal-dialog">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					                    <h4 class="modal-title">Anexos</h4>
					                </div>
					                <div class="modal-body">
							              <!--  <div class="container"> -->
		            						<!-- <h1> Adjuntar evidencia</h1> -->
		            						<div id="respuesta1" class="alert"></div>
		            						<!--<form action="javascript:void(0);">-->
		               							<div class="row">
                                                                                    
			                    					<div class="col-xs-12 col-sm-6 col-md-6"> 
			                        					<label>Tipo Documento: </label> 
			                    					</div>
			                    					<div class="col-xs-12 col-sm-6 col-md-6">
			                        					<!-- <input type="text" name="nombre_archivo1" id="nombre_archivo1" />-->
                                                                                         <select id="nombre_archivo1" name="nombre_archivo1">
                                                                                             <option value="">Seleccione ..</option>
                                                                                            <option value="CC">[CC]-Cedula de Ciudadania</option>
                                                                                            <option value="TI">[TI]Tarjeta de Identidad</option>
                                                                                            <option value="RC">[RC]Registro Civil</option>
                                                                                         </select>
			                    					</div>
                                                                                
                                                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                                                <label class="radio-inline">
                                                                                   Documento Propio
                                                                                </label>
                                                                                     <select id="oppropio" name="oppropio">
                                                                                             
                                                                                            <option value="1">Si</option>
                                                                                            <option value="0">No</option>
                                                                                            
                                                                                         </select>
                                                                                </div>
			                    					
		                						</div>
		                						
							               		<div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-md-12">
			                        					<input type="file" name="archivo1" id="archivo1" />
			                    					</div>                        
							                    	
							                    	
							                	</div>
                                                                            
                                                                                <div class="row">
                                                                                <div class="col-xs-12 col-sm-6 col-md-6">
							                        	<!--<input type="button" id="boton_subir1" value="Subir" class="btn btn-success" />-->
                                                                                         <button type="button" class="btn btn-primary start" id="boton_subir1">
                                                                                             <i class="glyphicon glyphicon-upload"></i>
                                                                                             <span>Subir Archivo</span> 
                                                                                         </button>
							                    	</div>
                                                                                <div class="col-xs-12 col-sm-6 col-md-6">
							                        	<progress id="barra_de_progreso1" value="0" max="100"></progress>
							                    	</div>
                                                                                </div>
							            	<!--</form>-->
							            	<hr />
							            		<div id="archivos_subidos1"></div>
							        		<!-- </div> -->
							                    
							             	</div>
							        <div class="modal-footer">
							            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							            
							        </div>
					            </div>
					        </div>
					    </div>
					
                                            <!--->
                                                
                                                
                                            <!--MODAL PARA ACTUALIZAR DATOS PERSONALES -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                  <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">
                                                            <div id="TituloModal"></div>
                                                           
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
                                                        <button type="button" id="bguardarModal1" name="bguardarModal1" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              
                                        <!--FINF MODAL PARA ACTUALIZAR DATOS PERSONALES  ---->
                                        
                                         <!--MODAL PARA AlERTAS -->
                                        
                                         
                                        <!--FIN MODAL PARA ALERTAS  ---->
                                        
                                        
                <div class="bs-example">                         
              <!-- BUSCAR AFILIADO -->     
              <span class="label label-success">Buscar por:</span>
                <div class="row" >
                    
                    
                   <div class="col-xs-12 col-sm-3 col-md-3">
                    <Select id="Stipo" name="Stipo" class="form-control input-sm">
                        <option value="">Seleccione..</option> 
                        
                        <option value="CC">Cedula de Ciudadania</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="RC">Registro Civil</option>
                        <option value="CE">Cedula de Extranjeria</option>
                        
                        
                    </select>
                    </div>
                        
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <input type="text" id="tdato" name="tdato" class="form-control input-sm number">
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">    
                       <button class="btn btn-default" type="button" id="bbuscar" name="bbuscar"><span class="glyphicon glyphicon-search"></span>Buscar</button>
                    
                        <button type="reset" id="bCancelarActualizacion1" name="bCancelarActualizacion1" class="btn btn-warning">Limpiar</button>
                    </div>
                    </div>
                                        
                                        
                                       
              <div class="panel-group" id="accordion">
		<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#paso0">1. DATOS PERSONALES</a>
                    </h4>
                </div>
		<!--<div id="paso1" class="panel-collapse collapse in">-->
                <div id="paso1">
                    <p></p><p></p>
                    <!--  INICIO CAPA DE DATOS PERSONALES  1    --->
                    <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" data-title="Busqueda">Adjuntar Evidencia Atención</button>-->
                                
                                <span class="label label-success">Primer Nombre:  <button class="btn btn-primary btn-xs" type="button" id="beditar1" name="beditar1" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil"></span></button></span><input type="text" id="tpnombre" name="tpnombre" class="form-control input-lg" readonly="readonly">
                                
                                <input type="hidden" id="tpnombreAnt" name="tpnombreAnt" class="form-control input-lg" readonly="readonly">

                            </div>
                         
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Segundo Nombre:<button class="btn btn-primary btn-xs" type="button" id="beditar2" name="beditar2" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tsnombre" name="tsnombre" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tsnombreAnt" name="tsnombreAnt" class="form-control input-lg" readonly="readonly">

                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Primer Apellido:<button class="btn btn-primary btn-xs" type="button" id="beditar3" name="beditar3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tpapellido" name="tpapellido" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tpapellidoAnt" name="tpapellidoAnt" class="form-control input-lg" readonly="readonly">

                            </div>
                         
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Segundo Apellido:<button class="btn btn-primary btn-xs" type="button" id="beditar4" name="beditar4" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tsapellido" name="tsapellido" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tsapellidoAnt" name="tsapellidoAnt" class="form-control input-lg" readonly="readonly">

                            </div>   
                        
                             
                    </div>
            
                    
                    <p></p>
                     <!-- FIN DE ESTA SECCION  DATOS PERSONALES 1 -->
                      <!--  INICIO  DATOS DE PERSONALES 2    --->
                           <div class="row" >
                           
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Fecha Nacimiento:<button class="btn btn-primary btn-xs" type="button" id="beditar5" name="beditar5" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tfechanac" name="tfechanac" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tfechanacAnt" name="tfechanacAnt" class="form-control input-lg" readonly="readonly">
                            </div>
                        
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Sexo:<button class="btn btn-primary btn-xs" type="button" id="beditar6" name="beditar6" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tsexo" name="tsexo" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tsexoAnt" name="tsexoAnt" class="form-control input-lg" readonly="readonly">    
                            </div>
                           
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Tipo Doc:<button class="btn btn-primary btn-xs" type="button" id="beditar7" name="beditar7" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="ttipodoc" name="ttipodoc" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="ttipodocAnt" name="ttipodocAnt" class="form-control input-lg" readonly="readonly">    
                            </div>
                         
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <span class="label label-success">Documento:<button class="btn btn-primary btn-xs" type="button" id="beditar8" name="beditar8" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tdocumento" name="tdocumento" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tdocumentoAnt" name="tdocumentoAnt" class="form-control input-lg" readonly="readonly">    
                            </div>
                               
                          
                           
                            <div id="mensajeAlert" class="alert">
                            <!--  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
                            </div>
                            </div>
                      <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="label label-success">Estado Civil:<button class="btn btn-primary btn-xs" type="button" id="beditar15" name="beditar15" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="testadocivil" name="testadocivil" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="testadocivilAnt" name="testadocivilAnt" class="form-control input-lg" readonly="readonly">

                            </div> 
                          
                      </div>
                    <!-- FIN DATOS PERSONALES 2 -->
                     <p></p>
                             <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" data-title="Busqueda">Adjuntar Documento Identificación</button>-->
                               <button type="button" class="btn btn-danger start" data-toggle="modal" data-target="#myModal1" data-title="Busqueda" id="badjuntar">
                               <i class="glyphicon glyphicon-upload"></i>
                               <span>Anexos</span> 
                               </button>
                               </div>   
                            </div>
                  
                </div>
                </div><!--FIN PESTAÑA 1 -->
                  
               <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#paso0">2. DATOS DE UBICACIÓN Y CONTACTOS</a>
                    </h4>
                </div>
		<!--<div id="paso2" class="panel-collapse collapse"> -->
                <div id="paso2">
                    <p></p><p></p>
                    <!--  INICIO  DATOS DE UBICACION    --->
                      
                       <div class="row" >
                           <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Departamento:<button class="btn btn-primary btn-xs" type="button" id="beditar14" name="beditar14" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tdepartamento" name="tdepartamento" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tdepartamentoAnt" name="tdepartamentoAnt" class="form-control input-lg" readonly="readonly">   
                                <input type="hidden" id="tdepartamentoCod" name="tdepartamentoCod" class="form-control input-lg" readonly="readonly">   
                                
                                
                            </div>
                           
                           <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Municipio:<button class="btn btn-primary btn-xs" type="button" id="beditar9" name="beditar9" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tmunicipio" name="tmunicipio" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tmunicipioAnt" name="tmunicipioAnt" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tmunicipioCod" name="tmunicipioCod" class="form-control input-lg" readonly="readonly">   
                            </div>
                            
                            
                           <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Dirección:<button class="btn btn-primary btn-xs" type="button" id="beditar10" name="beditar10" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tdireccion" name="tdireccion" class="form-control input-lg" readonly="readonly" size="200">
                                <input type="hidden" id="tdireccionAnt" name="tdireccionAnt" class="form-control input-lg" readonly="readonly">    
                            </div>
                           
                            <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Telefono:<button class="btn btn-primary btn-xs" type="button" id="beditar11" name="beditar11" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="ttelefono" name="ttelefono" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="ttelefonoAnt" name="ttelefonoAnt" class="form-control input-lg" readonly="readonly">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Celular:<button class="btn btn-primary btn-xs" type="button" id="beditar13" name="beditar13" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="tcelular" name="tcelular" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="tcelularAnt" name="tcelularAnt" class="form-control input-lg" readonly="readonly">
                            </div>
                                              
                            <div class="col-xs-6 col-sm-6 col-md-3" >
                                <span class="label label-success">Email:<button class="btn btn-primary btn-xs" type="button" id="beditar12" name="beditar12" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></span> 
                                <input type="text" id="temail" name="temail" class="form-control input-lg" readonly="readonly">
                                <input type="hidden" id="temailAnt" name="temailAnt" class="form-control input-lg" readonly="readonly">
                            </div>
                    
                     
                            
                        
                    </div>
                   
                  <p></p><p></p>
                </div>
               </div><!-- FIN PESTAÑA 2 -->
               
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#paso0">3. CONFIRMACIÓN</a>
                    </h4>
                </div>
		<!-- <div id="paso3" class="panel-collapse collapse">-->
                <div id="paso3">
                    <div class="row">
                        <p></p><p></p>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div id="globo1" class="city"></div>
                            </div>
                                     
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="city" id="lab1">Desea recibir información de acueducto:
                                <label class="radio-inline">
                                    <input type="radio" name="opinfo" checked="true">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="opinfo">NO
                                </label>
                                </div> 
                                
                            </div>
                    </div>
                    <p></p>
                    <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div id="globo2" class="city"></div>
                                <input type="hidden" id="tidunica" name="tidunica" class="form-control input-lg" readonly="readonly">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="city" id="lab2">Desea extender la invitación de SIACU a su familia, amigos y conocidos:
                                   <label class="radio-inline">
                                       <input type="radio" name="ophijos" checked="true">Si
                                    </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ophijos" >NO
                                </label>
                                </div>
                            </div>
                    </div>
                    <p></p>
                    <!--
                    <div class="g-recaptcha" data-sitekey="6LfaCCYTAAAAAAFFZt_VV8-8cRVKs7V6XX_fT_Rs"></div>
                    -->
                     <p></p>
                    <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               <button type="button" id="bguardarActualizacion" name="bguardarActualizacion" class="btn btn-success">Actualizar</button>
                               <button type="reset" id="bCancelarActualizacion" name="bCancelarActualizacion" class="btn btn-warning">Cancelar</button>
                            </div>
                    </div>
                <p></p><p></p>
                </div>
                </div>
                     
            </div><!-- Fin del panel collasable -->    
              </div><!-- fIN DE CLLAS-->
            </form>
               <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p>
                    <h2>HÁBEAS DATA - SIACU</h2> 
                    </p>
                    <p>
                        (SIACU manifiesta públicamente que los datos e información suministrados son propiedad de la organización y serán utilizados de manera transparente, lícita, segura y confiable; y únicamente se emplean para los fines concernientes con nuestro objeto social)  
                        
                    </p>
                

                    
                </div>
            </div>
                
            </div>
        <!--  </div> !-->
        
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