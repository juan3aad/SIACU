<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>

<body>
<header id="titulo">

        <h3>LISTADO DE AFILIADOS</h3>
    </header>
    
   <form name='frmlistaPersona' id='frmlistaPersona' action=''> 
 
     
       <article id="contenido">
    
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_listaPersonas">
                    <thead>
                    <tr>
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
                        <th>TOOLS</th>
                     </tr>
                    </thead>
                    <tfoot>
                    <tr>
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
                       <th></th>
                    </tr>
                    </tfoot>
                <tbody>
            
            <?php foreach($allpersonas as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                    <tr>
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
                    
                    <td>
                    <a href="<?php echo $helper->url("Tblpersona","borrar"); ?>&id=<?php echo $user->id_usuario; ?>" class="btn btn-danger">Borrar</a>
                    </td>
                
                
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