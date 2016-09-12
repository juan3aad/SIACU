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
               $mensaje1= $key['CONTRATO_AFIL'].",".$key['DOC_AFILIADO'].",".$key['TIPO_DOC'].",".$key['PRIMER_NOM'].",".$key['SEGUNDO_NOM'].",".$key['PRIMER_APE'].",".$key['SEGUNDO_APE'].",".$key['COD_SEXO'].",".$key['FECHA_NAC_AFIL']->format('Y-m-d').",".mb_convert_encoding($key['DESCRIPCION_DEPAR'],"UTF-8").",".mb_convert_encoding($key['DESCRIP_CIU'],"UTF-8").",".$key['TELRES_AFIL'].",".$key['DIREC_AFIL'].",".$key['COD_CIUDAD'].",".$key['COD_DEPAR'];
               // $mensaje1= $key['CONTRATO_AFIL'].",".$key['DOC_AFILIADO'].",".$key['TIPO_DOC'];
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

