 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form name="frmLogin2" id="frmLogin2" action="<?php echo $helper->url("TUsuario","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir usuario</h3>
            <hr/>
            Usuario: <input type="text" id="id_persona" name="id_persona" class="form-control"/>
            Login: <input type="text" id="login" name="login" class="form-control"/>
            Contraseña: <input type="text" id="password" name="password" class="form-control"/>
            Estado: <input type="text" id="estado" name="estado" class="form-control"/>
            Rol: <input type="text" id="id_rol" name="id_rol" class="form-control"/>
            <input type="submit"  id="bguardar"  name="bguardar" value="guardar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Usuarios</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->id_usuario; ?> 
                <?php echo $user->id_persona; ?> 
                <?php echo $user->login; ?> 
                <?php echo $user->password; ?> 
                <?php echo $user->activo; ?>
                <?php echo $user->id_rol; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("Tusuario","borrar"); ?>&id=<?php echo $user->id_usuario; ?>" class="btn btn-danger">Borrar</a>
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
     <div class="alert alert-warning">Debe iniciar sessión 1</div>

     <?php
    }
?>