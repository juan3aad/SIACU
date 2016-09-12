<?php
//register_shutdown_function('session_write_close');

//session_destroy();
 require_once 'view/header.php'; 
//Configuracion global
require_once 'config/global.php';
//Base para los controladores
require_once 'core/ControladorBase.php';
//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';
 
session_start();

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
	$controllerObj=cargarControlador($_GET["controller"]);
	lanzarAccion($controllerObj);
}
else
{
	$controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
	lanzarAccion($controllerObj);
}
?>
 <script src="scripts.js"></script> 

 <?php

 ?>

 <?php require_once 'view/footer.php'; ?>