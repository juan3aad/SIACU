<?php
class T_EmpresaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Empresa
        $t_empresa=new T_Empresa();
        
        //Conseguimos todos los Empres
        $allempresas=$t_empresa->getAllEsp("id_tipo_empresa","t_tipo_Empresa","des_tipo_empresa");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Empresa",array(
            "allempresas"=>$allempresas,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["nom_empresa"])){
            
            //Creamos un empresa
            $t_empresa=new T_Empresa();
            $t_empresa->setId_Empresa($_POST["id_empresa"]);
            $t_empresa->setNit_Empresa($_POST["nit_empresa"]);
            $t_empresa->setNom_Empresa($_POST["nom_empresa"]);
            $t_empresa->setId_Tipo_Empresa($_POST["id_tipo_empresa"]);
            $t_empresa->setEmail_Empresa($_POST["email_empresa"]);
            $t_empresa->setTelefono_Empresa($_POST["telefono_empresa"]);
         
            
            
            $save=$t_empresa->save();
        }
        $this->redirect("T_Empresa", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id_empresa"])){ 
            $id_empresa=(int)$_GET["id_empresa"];
            
            $empresa=new T_Empresa();
            $empresa->deleteBy("id_empresa",$id_empresa); 
        }
        $this->redirect("T_Empresa", "index");
    }
    
    
    public function hola(){
        $t_empresas=new T_EmpresaModel();
        $tempresa=$t_empresas->getUnT_Empresas();
        var_dump($tempresa);
    }

}
?>