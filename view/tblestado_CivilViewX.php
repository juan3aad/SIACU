 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
   
    <body>
        <form action="<?php echo $helper->url("tblestado_civil","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Estado Civil</h3>
            <hr/>
            Codigo: <input type="text" name="codestado_civil"  id="codestado_civil" class="form-control"/>
            Estado Civil: <input type="text" name="desestado_civil" id="desestado_civil" class="form-control"/>
            
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Dependencias</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tblestado_civil" style="height:400px;overflow-y:scroll;">
            <?php foreach($allciviles as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->secestado_civil; ?> 
                <?php echo $user->codestado_civil; ?> 
                <?php echo $user->desestado_civil; ?>
                
                
                <div class="right">
                    <a href="<?php echo $helper->url("tblestado_civil","borrar"); ?>&id=<?php echo $user->secestado_civil; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
        <footer class="col-lg-12">
            <hr/>
           Ejemplo - <a href=""></a> - Copyright &copy; <?php echo  date("Y"); ?>
        </footer>
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
