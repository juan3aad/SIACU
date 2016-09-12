<?php

require_once 'Tblpersona.php';

if(isset($_GET["form-identificacion"]))
{

$identificacion	 = addslashes(htmlspecialchars($_GET["form-identificacion"]));
//$contrasena = addslashes(htmlspecialchars($_GET["form-password"]));

if($identificacion ==""){
	echo 0;
}
else{
	$persona =new Tblpersona();
	//$persona->numero_identificacion = $identificacion;
	//$Usuario->contrasena_usuario= $contrasena;
	//$UsuarioControlador=new UsuarioControlador();

	$resultado=$persona->getBy("numero_identificacion",$identificacion);
	
	//$resultado=$UsuarioControlador->seleccionarUsuario($Usuario);
	echo "HOLA";
	///mysqli_num_rows=si tiene datos
	if (mysqli_num_rows($resultado)>0){
		
		session_start();
		$_SESSION['Usuario']=$nombre;
		$_SESSION['logueado']='SI';
		
		
	echo 1;
	
	}
	else{
		session_start();
		$_SESSION['Usuario']='';
		$_SESSION['logueado']='NO';
		
		
		echo 0;
	}
	
}
}



?>