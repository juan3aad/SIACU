 <?php
 session_start();
 if($_SESSION["validacion"]==1){



?>
    <body>
        <form   name="frmMunicipio" id="frmMunicipio"  action="<?php echo $helper->url("T_Municipio","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Municipios</h3>
            <hr/>

            <label>Departamento:</label>
            <select id="id_departamento" name="id_departamento" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>

            <label>Codigo:</label>
            <input type="text" name="cod_municipio" id="cod_municipio" class="form-control"/>

            <label>Municipio:</label> 
            <input type="text" name="des_municipio" id="des_municipio" class="form-control"/>
            
                                   
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Municipios</h3>
            <hr/>
        </div>
        <section class="col-lg-7 t_municipio" style="height:400px;overflow-y:scroll;">
            <table border="1" align="center">
            <tr><th>ID</th><th>CODIGO</th><th>MUNICIPIO</th><th>DEPARTAMENTO</th><th>Edición</th></tr>
            <?php foreach($allmunicipios as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
             <tr>
             <td><?php echo $user->id_municipio; ?></td>
             <td><?php echo $user->cod_municipio; ?></td>
             <td><?php echo $user->des_municipio; ?></td>
             <td><?php echo $user->des_departamento; ?></td>
             <td>
                    <a href="<?php echo $helper->url("T_Municipio","borrar"); ?>&id_municipio=<?php echo $user->id_municipio; ?>" class="btn btn-danger">Borrar</a>
             </td>   
                
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