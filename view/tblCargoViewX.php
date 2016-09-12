 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form action="<?php echo $helper->url("tblcargo","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Cargo</h3>
            <hr/>
            Codigo: <input type="text" name="codcargo"  id="codcargo" class="form-control"/>
            Cargo: <input type="text" name="descargo" id="descargo" class="form-control"/>
            Estado: <input type="text" name="estado" id="estado" class="form-control"/>
                                  
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Cargos</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tblcargo" style="height:400px;overflow-y:scroll;">
            <?php foreach($allcargos as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->seccargo; ?> 
                <?php echo $user->codcargo; ?> 
                <?php echo $user->descargo; ?>
                <?php echo $user->estado; ?>
               
                <div class="right">
                    <a href="<?php echo $helper->url("tblcargo","borrar"); ?>&id=<?php echo $user->seccargo; ?>" class="btn btn-danger">Borrar</a>
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

