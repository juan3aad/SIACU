 <?php
require_once 'core/ControladorBase.php';
require_once  'controller/T_DepartamentoController.php';
  //______________
 $departamento=new T_DepartamentoController(); 
 $departamentos = $departamento->cargarDepartamentos();
foreach($departamentos as $key)
{
    //echo "<option value=\"$key\">".mb_convert_encoding($value, "UTF-8")."</option>";
    echo "<option value=\"$key->id_departamento\">".$key->des_departamento."</option>";
    
}
?>
