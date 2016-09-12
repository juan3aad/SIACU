<?php
 session_start();
 if($_SESSION["validacion"]==2){
?>
    <body>
        <form action="<?php echo $helper->url("T_Persona","crear"); ?>" method="post" class="col-lg-5">
            
            
                
            <h3>Añadir persona</h3>
            <hr/>
            Tipo_Doc: 
            <select id="tipo_identificacion" name="tipo_identificacion" required   class="form-control">
                <option value="">Seleccione</option>
                <option value="CC">Cedula de Ciudadania</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="CE">Cedula de Extranjeria</option>

            </select>
          
                <div class="col-xs-6 col-sm-6 col-md-6">
            Identificación: <input type="text" name="numero_identificacion" id="numero_identificacion" class="form-control"/>
            </div>
               
            
               
            Primer_nombre: <input type="text" name="primer_nombre" id="primer_nombre" class="form-control"/>
            Segundo_nombre: <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control"/>
            primer_apellido: <input type="text" name="primer_apellido" id="primer_apellido" class="form-control"/>
            Segundo_apellido: <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control"/>

            <label>Estado Civil:</label>
            <select id="id_estado_civil" name="id_estado_civil" class="form-control">
                <option value="">Seleccione</option>
                <option value="1">Solter@</option>
                <option value="2">Casad@</option>
                <option value="3">Unión libre</option>
                <option value="4">Separad@</option>
                <option value="5">Viud@</option>


            </select>
            
            <label>Sexo:</label>
            <select id="id_sexo" name="id_sexo" class="form-control">
                <option value="">Seleccione...</option>
                <option value="1">Masculino</option>
                <option value="2">Femenimo</option>
                
            </select>

            
            <label>Departamento:</label>
            <select id="id_departamento" name="id_departamento" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>

            <label>Municipio:</label>
            <select id="id_municipio" name="id_municipio" class="form-control">
                <option value='0'>Selecciona Uno...</option>
            </select>


            Dirección: <input type="text" name="direccion" id="direccion" class="form-control"/>    
            Fecha Nacimiento: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"/>    
            ruta_fotografia: <input type="text" name="ruta_fotografia" id="ruta_fotografia" class="form-control"/>    
            

                       
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Personas</h3>
            <hr/>
        </div>
        <section class="col-lg-7 T_Persona" style="height:400px;overflow-y:scroll;">
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
                    <a href="<?php echo $helper->url("T_Persona","borrar"); ?>&id=<?php echo $user->secpersona; ?>" class="btn btn-danger">Borrar</a>
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