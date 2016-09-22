<?php
require_once 'core/ControladorBase.php';
require_once  'controller/TblpersonaController.php';

if(isset($_POST['tmarca']))
  {
    $actPersona = new TblpersonaController();
    $datosT=explode(',',$_POST['tmarca']);
    $datosT  =array_unique($datosT);
    
    
    $ScriptValues="";
    $ScriptSet="";
   foreach ($datosT as $como)     
    {
        switch ($como)
        {
            case '1':
                $vActu1="primer_nombre= '".trim($_POST['tpnombre'])."',";
                $ScriptSet=$ScriptSet.$vActu1;
               /* $vInfo1="('3','".trim($_POST['tpnombreAnt'])."','".trim($_POST['tpnombre'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo1;*/
                break;
            case '2':
                $vActu2="segundo_nombre= '".trim($_POST['tsnombre'])."',";
                $ScriptSet=$ScriptSet.$vActu2;
                /*$vInfo2="('4','".trim($_POST['tsnombreAnt'])."','".trim($_POST['tsnombre'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo2;*/
                break;
            case '3':
                $vActu3="primer_apellido= '".trim($_POST['tpapellido'])."',";
                $ScriptSet=$ScriptSet.$vActu3;
                /*$vInfo3="('1','".trim($_POST['tpapellidoAnt'])."','".trim($_POST['tpapellido'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo3;*/
                break;
            case '4':
                $vActu4="segundo_apellido= '".trim($_POST['tsapellido'])."',";
                $ScriptSet=$ScriptSet.$vActu4;
                /*$vInfo4="('2','".trim($_POST['tsapellidoAnt'])."','".trim($_POST['tsapellido'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo4;*/
                break;
            case '5':
                $vActu5="fecha_nacimiento= '".trim($_POST['tfechanac'])."',";
                $ScriptSet=$ScriptSet.$vActu5;
                /*$vInfo5="('16','".trim($_POST['tfechanacAnt'])."','".trim($_POST['tfechanac'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo5;*/
                break;
            
            case '6':
                $vActu6="fecha_nacimiento= '".trim($_POST['tfechanac'])."',";
                $ScriptSet=$ScriptSet.$vActu6;
                /*$vInfo6="('7','".trim($_POST['tsexoAnt'])."','".trim($_POST['tsexo'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo6;*/
                break;
            
            case '7':
                $vActu7="tipo_identificacion= '".trim($_POST['ttipodoc'])."',";
                $ScriptSet=$ScriptSet.$vActu7;
                /*$vInfo7="('5','".trim($_POST['ttipodocAnt'])."','".trim($_POST['ttipodoc'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo7;*/
                break;
            
            case '8':
                $vActu8="numero_identificacion= '".trim($_POST['tdocumento'])."',";
                $ScriptSet=$ScriptSet.$vActu8;
                /*$vInfo8="('6','".trim($_POST['tdocumentoAnt'])."','".trim($_POST['tdocumento'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo8;*/
                break;
            
            case '9':
                $vActu9="id_municipio= '".trim($_POST['tmunicipioCod'])."',";
                $ScriptSet=$ScriptSet.$vActu9;
                /*$vInfo9="('12','".trim($_POST['tmunicipioAnt'])."','".trim($_POST['tmunicipioCod'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo9;*/
                break;
            
            case '10':
                $vActu10="direccion= '".trim($_POST['tdireccion'])."',";
                $ScriptSet=$ScriptSet.$vActu10;
                
                /*$vInfo10="('15','".trim($_POST['tdireccionAnt'])."','".trim($_POST['tdireccion'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo10;*/
                break;
            
            case '11':
                $vActu11="telefono= '".trim($_POST['ttelefono'])."',";
                $ScriptSet=$ScriptSet.$vActu11;
                /*$vInfo11="('9','".trim($_POST['ttelefonoAnt'])."','".trim($_POST['ttelefono'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo11;*/
                break;
            /*
            case '12':
               
                
               $vInfo12="('8','".trim($_POST['temailAnt'])."','".trim($_POST['temail'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo12;
                break;
            
            case '13':
                $vInfo13="('10','".trim($_POST['tcelularAnt'])."','".trim($_POST['tcelular'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo13;
                break;
            
            case '14':
                $vInfo14="('11','".trim($_POST['tdepartamentoAnt'])."','".trim($_POST['tdepartamentoCod'])."','".trim($_POST['tidunica'])."',GETDATE()),";
                $ScriptValues=$ScriptValues.$vInfo14;
                break;
            */
            
                
        }
        
    }
    $ScriptSet=  substr($ScriptSet, 0,strlen($ScriptSet)-1);
    
    $resultado=$actPersona->actualizar($ScriptSet,trim($_POST['tidunica']));
    echo $resultado;
    
    //echo $ScriptSet;
  
         

  }
 else {
     echo 0;
}

  ?>
