<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form name="frmTipo_Empresa" id="frmTipo_Empresa" action="<?php echo $helper->url("T_Tipo_Empresa","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso Tipo Empresa</h3>
            <hr/>
            Tipo Empresa: <input type="text" name="des_tipo_empresa"  id="des_tipo_empresa" class="form-control"/>
                                               
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Tipo de Empresa</h3>
            <hr/>
        </div>
        <section class="col-lg-7 t_Tipo_Empresa" style="height:400px;overflow-y:scroll;">
        <table border="1" align="center" width="100%">
        <tr><th>ID</th><th>EMPRESA</th><th>EDICION</th></tr>
            <?php foreach($alltiposempresas as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
               <tr>
                <td><?php echo $row->id_tipo_empresa; ?></td>
                <td><?php echo $row->des_tipo_empresa; ?></td>
                <td><a href="<?php echo $helper->url("T_Tipo_Empresa","borrar"); ?>&id_tipo_empresa=<?php echo $user->id_tipo_empresa; ?>" class="btn btn-danger">Borrar</a></td>
               </tr> 
                
            <?php } ?>
        </table>
        </section>
       
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
