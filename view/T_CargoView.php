<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form  name="frmcargo" id="frmcargo"  action="<?php echo $helper->url("T_Cargo","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso de Cargos</h3>
            <hr/>
            Codigo: <input type="text" name="cod_cargo"  id="cod_cargo" class="form-control"/>
            Cargo: <input type="text" name="des_cargo" id="des_cargo" class="form-control"/>
            <label>Tipo Cargo:</label>
            <select id="id_tipo_cargo" name="id_tipo_cargo" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Listado de cargos</h3>
            <hr/>
        </div>
        <section class="col-lg-7 pais" style="height:400px;overflow-y:scroll;">
            <?php foreach($allcargos as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $row->id_cargo; ?> 
                <?php echo $row->cod_cargo; ?> 
                <?php echo $row->des_cargo; ?>
                <?php echo $row->id_tipo_cargo; ?>

                <div class="right">
                    <a href="<?php echo $helper->url("T_Cargo","borrar"); ?>&id_cargo=<?php echo $row->id_cargo; ?>" class="btn btn-danger">Borrar</a>
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
