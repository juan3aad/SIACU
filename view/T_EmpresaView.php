<?php

 session_start();
 
 if($_SESSION["validacion"]==2){

?>
    <body>
        <form   name="frmEmpresa" id="frmEmpresa"  action="<?php echo $helper->url("T_Empresa","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Empresa</h3>
            <hr/>

            <label>Nit:</label>
            <input type="text" name="nit_empresa" id="nit_empresa" class="form-control"/>

            <label>Razón Social:</label>
            <input type="text" name="nom_empresa" id="nom_empresa" class="form-control"/>

            <label>Tipo:</label>
            <select id="id_tipo_empresa" name="id_tipo_empresa" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>

            <label>Email:</label>
            <input type="text" name="email_empresa" id="email_empresa" class="form-control"/>

            <label>Telefono:</label> 
            <input type="text" name="telefono_empresa" id="telefono_empresa" class="form-control"/>
            
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Empresas</h3>
            <hr/>
        </div>

        <section class="col-lg-7 t_empresa" style="height:400px;overflow-y:scroll;">
        <table border="1" align="center" width="100%">
         <tr><th>ID</th><th>NIT</th><th>EMPRESA</th><th>TIPO_EMPRESA</th><th>EMAIL</th><th>TELEFONO</th><th>EDICION</th></tr>
            <?php foreach($allempresas as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
              <tr><td><?php echo $row->id_empresa; ?></td>
              <td><?php echo $row->nit_empresa; ?> </td>
              <td><?php echo $row->nom_empresa; ?></td>
              <td><?php echo $row->des_tipo_empresa; ?></td>
              <td><?php echo $row->email_empresa; ?></td>
              <td><?php echo $row->telefono_empresa; ?></td>
              <td><a href="<?php echo $helper->url("T_Empresa","borrar"); ?>&id_empresa=<?php echo $row->id_empresa; ?>" class="btn btn-danger">Borrar</a></td>
              </tr>  
        <?php } ?>
        </table>    
        </section>
        
    </body>
    <?php
    }
    else
    {
        //session_destroy();
     ?>
     <div class="alert alert-warning">Debe iniciar sessión</div>

     <?php
    }
?>