<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form name="frmTipo_Educacion" id="frmTipo_Educacion" action="<?php echo $helper->url("T_Tipo_Educacion","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso Tipo Educacion</h3>
            <hr/>
            Codigo: <input type="text" name="cod_tipo_educacion"  id="cod_tipo_educacion" class="form-control"/>
            Descripción: <input type="text" name="des_tipo_educacion"  id="des_tipo_educacion" class="form-control"/>
                                               
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Tipo Educación</h3>
            <hr/>
        </div>
        <section class="col-lg-7 t_tipo_educacion" style="height:400px;overflow-y:scroll;">
            <?php foreach($alltiposeducacion as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $row->id_tipo_educacion; ?> 
                <?php echo $row->cod_tipo_educacion; ?> 
                <?php echo $row->des_tipo_educacion; ?> 
                
                
                
                <div class="right">
                    <a href="<?php echo $helper->url("T_Tipo_Educacion","borrar"); ?>&id_tipo_educacion=<?php echo $row->id_tipo_educacion; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
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