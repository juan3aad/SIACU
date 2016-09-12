 <?php
 session_start();
 if($_SESSION["validacion"]==2){
?>
    <body>
        <form action="<?php echo $helper->url("tblpersona","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir persona</h3>
            <hr/>
            Tipo_Doc: <input type="text" name="tipo_Identificacion"  id="tipo_Identificacion" class="form-control"/>
            Identificación: <input type="text" name="numero_identificacion" id="numero_identificacion" class="form-control"/>
            Primer_nombre: <input type="text" name="primer_nombre" id="primer_nombre" class="form-control"/>
            Segundo_nombre: <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control"/>
            primer_apellido: <input type="text" name="primer_apellido" id="primer_apellido" class="form-control"/>
            Segundo_apellido: <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control"/>

            Estado_civil: <input type="text" name="secestado_civil" id="secestado_civil" class="form-control"/>    
            Sexo: <input type="text" name="secsexo" id="secsexo" class="form-control"/>    
            Municipio: <input type="text" name="secmunicipio" id="secmunicipio" class="form-control"/>    
            Dirección: <input type="text" name="direccion" id="direccion" class="form-control"/>    
            Fecha Nacimiento: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"/>    
            ruta_fotografia: <input type="text" name="ruta_fotografia" id="ruta_fotografia" class="form-control"/>    
             peso: <input type="text" name="peso" id="peso" class="form-control"/>

                       
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Personas</h3>
            <hr/>
        </div>
        <section class="col-lg-7 tblpersona" style="height:400px;overflow-y:scroll;">
            <?php foreach($allpersonas as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->secpersona; ?> 
                <?php echo $user->tipo_Identificacion; ?> 
                <?php echo $user->primer_nombre; ?>
                <?php echo $user->segundo_nombre; ?>
                <?php echo $user->primer_apellido; ?>
                <?php echo $user->segundo_apellido; ?>
                <?php echo $user->secestado_civil; ?> 
                <?php echo $user->secsexo; ?>
                <?php echo $user->secmunicipio; ?>
                <?php echo $user->direccion; ?>
                <?php echo $user->fecha_nacimiento; ?>
                <?php echo $user->ruta_fotografia; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("tblpersona","borrar"); ?>&id=<?php echo $user->secpersona; ?>" class="btn btn-danger">Borrar</a>
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