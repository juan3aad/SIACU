
    <body>
        <form action="<?php echo $helper->url("tblmotivo","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Motivos</h3>
            <hr/>
            Motivo: <input type="text" name="desmotivo"  id="desmotivo" class="form-control"/>
            Estado: <input type="text" name="estado" id="estado" class="form-control"/>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Motivo</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tblmotivo" style="height:400px;overflow-y:scroll;">
            <?php 
            session_start();
            echo "valor=".$_SESSION['validacion']."<br><br>";
            
            foreach($allmotivos as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->secmotivo; ?> 
                <?php echo $user->desmotivo; ?> 
                <?php echo $user->estado; ?>
                
                
                <div class="right">
                    <a href="<?php echo $helper->url("tblmotivo","borrar"); ?>&id=<?php echo $user->secmotivo; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
        
    </body>
