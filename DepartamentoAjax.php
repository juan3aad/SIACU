 <?php
require_once 'core/ControladorBase.php';
require_once  'controller/TbldepartamentoController.php';
  //______________
 $departamento=new TbldepartamentoController(); 
 $departamentos = $departamento->cargarDepartamentos();
foreach($departamentos as $key)
{
    //echo "<option value=\"$key\">".mb_convert_encoding($value, "UTF-8")."</option>";
    echo "<option value=\"$key->id_departamento\">".mb_convert_encoding($key->des_departamento, "UTF-8")."</option>";
    
}
?>
