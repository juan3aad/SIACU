<?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form name="frmTipo_Modalidad" id="frmTipo_Modalidad" action="<?php echo $helper->url("T_Tipo_Modalidad","crear"); ?>" method="post" class="col-lg-5">
            <h3>Ingreso Tipo Modalidad</h3>
            <hr/>
            Modalidad: <input type="text" name="des_tipo_modalidad"  id="des_tipo_modalidad" class="form-control"/>


            <label>Tipo:</label>
            <select id="id_tipo_educacion" name="id_tipo_educacion" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>
                                               
            <input type="submit" value="enviar" class="btn btn-success"/>
            
        </form>
        
        <div class="col-lg-7">
            <h3>Modalidad</h3>
            <hr/>
        </div>
        <section class="col-lg-7 t_tipo_modalidad" style="height:400px;overflow-y:scroll;">
            <?php foreach($alltiposmodalidad as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $row->id_tipo_modalidad; ?> 
                <?php echo $row->des_tipo_modalidad; ?> 
                <?php echo $row->id_tipo_educacion; ?> 
                
                
                
                <div class="right">
                    <a href="<?php echo $helper->url("T_Tipo_Modalidad","borrar"); ?>&id_tipo_modalidad=<?php echo $row->id_tipo_modalidad; ?>" class="btn btn-danger">Borrar</a>
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