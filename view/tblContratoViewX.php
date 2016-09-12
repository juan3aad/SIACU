 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form action="<?php echo $helper->url("tblcontrato","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Contrato</h3>
            <hr/>
            Codigo: <input type="text" name="codtipo_contrato"  id="codtipo_contrato" class="form-control"/>
            Tipo: <input type="text" name="destipo_contrato" id="destipo_contrato" class="form-control"/>
                                              
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Cargos</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tblcontrato" style="height:400px;overflow-y:scroll;">
            <?php foreach($allcontratos as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->sectipo_contrato; ?> 
                <?php echo $user->codtipo_contrato; ?> 
                <?php echo $user->destipo_contrato; ?>
              
               
                <div class="right">
                    <a href="<?php echo $helper->url("tblcontrato","borrar"); ?>&id=<?php echo $user->sectipo_contrato; ?>" class="btn btn-danger">Borrar</a>
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