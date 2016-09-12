 <?php
require_once 'core/ControladorBase.php';
require_once  'controller/T_PaisController.php';
  //______________
 $pais=new T_PaisController(); 
 $paises = $pais->cargarPaises();
foreach($paises as $key)
{
    //echo "<option value=\"$key\">".mb_convert_encoding($value, "UTF-8")."</option>";
    echo "<option value=\"$key->id_pais\">".mb_convert_encoding($key->des_pais, "UTF-8")."</option>";
    
}
?>
