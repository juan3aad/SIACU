<?php
class T_Tipo_EmpresaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto T_Pais
        $t_tipo_empresa=new T_Tipo_Empresa();
        
        //Conseguimos todos los motivos
        $alltiposempresas= $t_tipo_empresa->getAll("id_tipo_empresa");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Tipo_Empresa",array(
            "alltiposempresas"=>$alltiposempresas,
            "Hola"    =>"Soy"
        ));
    }
    //---------------
    public function crear(){
        if(isset($_POST["des_tipo_empresa"])){
            
            //Creamos un pais
            $t_tipo_empresa=new T_Tipo_Empresa();
            $t_tipo_empresa->setId_Tipo_Empresa($_POST["id_tipo_empresa"]);
            $t_tipo_empresa->setDes_Tipo_Empresa($_POST["des_tipo_empresa"]);
         
            
            $save=$t_tipo_empresa->save();
        }
        $this->redirect("T_Tipo_Empresa", "index");
    }
    
    //----------------------
    public function borrar(){
    
        if(isset($_GET["id_tipo_empresa"])){ 
            $id_tipo_empresa=(int)$_GET["id_tipo_empresa"];
            
            $tipoEmpresa=new T_Tipo_Empresa();
            $tipoEmpresa->deleteBy("id_tipo_empresa",$id_tipo_empresa); 
        }
        $this->redirect("T_Tipo_Empresa", "index");
    }

   
    //-----------------------
    public function  cargarTipoEmpresas(){

         $t_tipo_empresa=new T_Tipo_Empresa();
        
        //Conseguimos todos los paises
        $alltiposempresas=$t_tipo_empresa->getAll("id_tipo_empresa");

        return  $alltiposempresas;

    }

    
    
     
}
?>