
<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>SIACU_2</title>
<!---  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- para datepiker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!---  -->  
  
  <link rel="stylesheet" type="text/css" href="../cujacal/bootstrap/css/styleForm.css"> 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/styleFooter.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/login.css">
  
  <script src="./bootstrap/js/bootstrap1.min.js"></script>
  
  <!--ventanas de alerta -->
<link href="./bootstrap/css/alertify.min.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/themes/bootstrap.rtl.min.css" rel="stylesheet" type="text/css"/>
<script src="./bootstrap/js/alertify.min.js" type="text/javascript"></script>

<!-- -->

        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
            
            h3 {text-align: center}


            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
            width: 30%;
             margin: auto;
        </style>
    </head>

    <header>

    
     <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          
        <div class="navbar-header">
           <!-- <img src="./imagen/escudo2.png" width="70px" height="90px" alt=""> -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar">Hola</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
            
            
          
          
          
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <p>
            <a class="navbar-brand" href="#">EMSSANAR SISTEMA DE INFORMACIÓN</a>
            </p>    
          <ul class="nav navbar-nav">
            <li class="active">
              <?php
          error_reporting(E_ALL ^ E_NOTICE);
          session_start();
          /*Evaluo que la sesion continue verificando de las demas variables creadas en el control pp*/
          if($_SESSION["validacion"]==2){
        ?>

              <a href="#">Inicio</a></li>
              <li><a href="#">Consulta Hojas de vida</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="buscarAfiliado.php">Registro<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./index.php?controller=T_Persona&action=index">Datos Personales</a></li>
                <li><a href="#">Formación Académica</a></li>
                <li><a href="#">Experiencia Laboral</a></li>
                
              </ul> 
            </li> 
            <!-- <li><a href="/AUDITORIA/paginacionAuditoria.php">Ver auditorias</a></li>
            <li><a href="/AUDITORIA/subirArchivo1.php">Cargar evidencias</a></li> -->
      <?php 
        
      }
      else
      {

        if($_SESSION["validacion"]==1){
          ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ubicación<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./index.php?controller=T_Pais&action=index">Pais</a></li>
                <li><a href="./index.php?controller=T_Departamento&action=index">Departamento</a></li>
                <li><a href="./index.php?controller=t_Municipio&action=index">Municipio</a></li>
                <li><a href="./index.php?controller=T_Tipo_Empresa&action=index">Tipo Empresa</a></li>
                <li><a href="./index.php?controller=T_Empresa&action=index">Empresa</a></li>
              </ul> 

          </li>
          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laboral<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./index.php?controller=T_Tipo_Cargo&action=index">Tipo Cargo</a></li>
                <li><a href="./index.php?controller=T_Cargo&action=index">Cargo</a></li>
              </ul> 
          </li>
          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academico<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./index.php?controller=T_Tipo_Educacion&action=index">Tipo Educación</a></li>
                <li><a href="./index.php?controller=T_Tipo_Modalidad&action=index">Modalidad</a></li>
                
              </ul> 
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./index.php?controller=TUsuario&action=index2">Usuario</a></li>
                <li><a href="./index.php?controller=Tblpersona&action=index2">Afiliados</a></li>
                <!-- <li><a href="./index.php?controller=tblestado_Civil&action=index">Estado Civil</a></li>
                <li><a href="./index.php?controller=tblCargo&action=index">Cargo</a></li>
                <li><a href="./index.php?controller=tblContrato&action=index">Contrato</a></li> -->
              </ul> 
          </li>
          <?php
        }
        
      }
      ?>

          </ul>
          <?php if($_SESSION["validacion"]==1 or $_SESSION["validacion"]==2){  ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.php?controller=Usuario&action=salir"><span class="glyphicon glyphicon-user"></span>Cerrar sesión</a></li>
            
          </ul>
          <?php
          }
          else
          { ?>
            <ul class="nav navbar-nav navbar-right">
            
            <li><a href="./index.php?controller=Usuario&action=index"> <span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
          </ul>
          <?php
          }
          ?>


        </div>
      </div>
    </nav>
       

  
   
</header>
    
   
    
    

