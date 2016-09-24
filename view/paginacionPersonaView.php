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
                     <button class="btn btn-primary btn-xs" type="button" id="beditarAfil" name="<?php echo $user->id_persona; ?>" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil"></span></button> 
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