 <?php
 session_start();
 
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form  name="frmPais" id="frmPais"  action="<?php echo $helper->url("T_Pais","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso Pais</h3>
            <hr/>
            Codigo: <input type="text" name="cod_pais"  id="cod_pais" class="form-control"/>
            Pais: <input type="text" name="des_pais" id="des_pais" class="form-control"/>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Listado Paises</h3>
            <hr/>
        </div>
        <section class="col-lg-7 pais" style="height:400px;overflow-y:scroll;">
        <table border="1" align="center" width="100%">
        <tr><th>ID</th><th>CODIGO</th><th>PAIS</th><th>EDICION</th></tr>
            <?php foreach($allpaises as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <tr><td><?php echo $row->id_pais; ?></td><td><?php echo $row->cod_pais; ?></td><td><?php echo $row->des_pais; ?></td><td>
                    <a href="<?php echo $helper->url("T_Pais","borrar"); ?>&id=<?php echo $user->secdepartamento; ?>" class="btn btn-danger">Borrar</a>

                </td></tr>
                
                
                    
                
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
