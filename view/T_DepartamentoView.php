 <?php
 session_start();
 if($_SESSION["validacion"]==1){
?>
    <body>
        <form  name="frmDepartamento" id="frmDepartamento" action="<?php echo $helper->url("T_Departamento","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Departamentos</h3>
            <hr/>
            <label>Codigo:</label><input type="text" name="cod_departamento"  id="cod_departamento" class="form-control"/>
            <label>Departamento:</label><input type="text" name="des_departamento" id="des_departamento" class="form-control"/>
         
            <label>Pais:</label>
                    <select id="id_pais" name="id_pais" class="form-control">
                        <option value='0'>Selecciona Uno...</option>
                    </select>
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Departamentos</h3>
            <hr/>
        </div>
        
        <section class="col-lg-7 t_departamento" style="height:400px;overflow-y:scroll;">
        <table border="1" align="center" width="100%">
        <tr><th>ID</th><th>CODIGO</th><th>DEPARTAMENTO</th><th>PAIS</th><th>EDICION</th></tr>
            <?php foreach($alldepartamentos as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
            <tr>
            <td><?php echo $row->id_departamento; ?> </td>
            <td><?php echo $row->cod_departamento; ?> </td>
            <td><?php echo $row->des_departamento; ?></td>    
            <td><?php echo $row->des_pais; ?></td>
            <td><a href="<?php echo $helper->url("T_Departamento","borrar"); ?>&id_departamento=<?php echo $row->id_departamento; ?>" class="btn btn-danger">Borrar</a>
            </td>
            </tr>
            <?php } ?>
        </table>
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
