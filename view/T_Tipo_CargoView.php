<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form  name="frmtipocargo" id="frmtipocargo"  action="<?php echo $helper->url("T_Tipo_Cargo","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso Tipo de Cargo</h3>
            <hr/>
            Codigo: <input type="text" name="cod_tipo_cargo"  id="cod_tipo_cargo" class="form-control"/>
            Tipo Cargo: <input type="text" name="des_tipo_cargo" id="des_tipo_cargo" class="form-control"/>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Listado de tipos de cargos</h3>
            <hr/>
        </div>
        <section class="col-lg-7 pais" style="height:400px;overflow-y:scroll;">
            <?php foreach($alltiposcargo as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $row->id_tipo_cargo; ?> 
                <?php echo $row->cod_tipo_cargo; ?> 
                <?php echo $row->des_tipo_cargo; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("T_Tipo_Cargo","borrar"); ?>&id_tipo_cargo=<?php echo $row->id_tipo_cargo; ?>" class="btn btn-danger">Borrar</a>
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
