 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form action="<?php echo $helper->url("tbldependencia","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Dependencias</h3>
            <hr/>
            Numero: <input type="text" name="numdependencia"  id="numdependencia" class="form-control"/>
            Dependencia: <input type="text" name="desdependencia" id="desdependencia" class="form-control"/>
            Estado: <input type="text" name="estado" id="estado" class="form-control"/>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Dependencias</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tbldependencia" style="height:400px;overflow-y:scroll;">
            <?php foreach($alldependencias as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->secdependencia; ?> 
                <?php echo $user->numdependencia; ?> 
                <?php echo $user->desdependencia; ?>
                <?php echo $user->estado; ?>
                
                <div class="right">
                    <a href="<?php echo $helper->url("tbldependencia","borrar"); ?>&id=<?php echo $user->secdependencia; ?>" class="btn btn-danger">Borrar</a>
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
