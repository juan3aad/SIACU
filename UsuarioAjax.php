<?php
require_once 'core/ControladorBase.php';
require_once  'controller/UsuarioController.php';

if(isset($_POST["login"]))
  {
    $pass=sha1($_POST["password"]);
  	$validar1=new UsuarioController();
  	 $val1=$validar1->validar($_POST["login"],$pass);

     if($val1==1)
     {
      echo 1;
      
     }  	
     else
     {
      echo 0; 
     }
  }



  ?>