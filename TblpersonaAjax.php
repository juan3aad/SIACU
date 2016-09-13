<?php
require_once 'core/ControladorBase.php';
require_once  'controller/TblpersonaController.php';

if(isset($_POST["tdato"]))
  {
  	$validar1=new TblpersonaController();
  	$val1=$validar1->buscarUsuario($_POST["Stipo"],$_POST["tdato"]);
        
      
        if($val1!==0)
        {
        
        
            foreach($val1 as $key)
            {
               $mensaje1= $key->id_persona.",".
                       $key->primer_nombre.",".
                       mb_convert_encoding($key->segundo_nombre,"UTF-8").",".
                       mb_convert_encoding($key->primer_apellido,"UTF-8").",".
                       $key->segundo_apellido.",".
                       $key->fecha_nacimiento.",".
                       $key->cod_sexo.",".
                       $key->tipo_identificacion.",".
                       $key->numero_identificacion.",".
                       
                       $key->id_estado_civil.",".
                       
                       $key->id_municipio.",".
                       $key->direccion.",".
                       $key->telefono.",".
                       $key->celular.",".
                       $key->email.",".
                       $key->ruta_fotografia;
                    
                       
               //$mensaje1="hola";
               echo $mensaje1;
                //echo "<option value=\"$key\">".mb_convert_encoding($value, "UTF-8")."</option>";
               // echo "<option value=\"$key['CONTRATO_AFIL']\">".$key->CONTRATO_AFIL."</option>";
    
            }
      
        } 
                
        else
        {
            echo 0; 
        }

  }

  ?>

