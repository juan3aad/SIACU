<?php
class T_DepartamentoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto T_Departamento
        $t_departamento=new T_Departamento();
        
        //Conseguimos todos los Departamentos
        //$alldepartamentos=$t_departamento->getAll("id_departamento");
        $alldepartamentos=$t_departamento->getAllEsp("id_pais","t_pais","des_pais");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Departamento",array(
            "alldepartamentos"=>$alldepartamentos,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["des_departamento"])){
            
            //Creamos un departamento
            $t_departamento=new T_Departamento();
            $t_departamento->setCod_Departamento($_POST["cod_departamento"]);
            $t_departamento->setDes_Departamento($_POST["des_departamento"]);
            $t_departamento->setId_Pais($_POST["id_pais"]);
         
            
            
            $save=$t_departamento->save();
        }
        $this->redirect("T_Departamento", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id_departamento"])){ 
            $id_departamento=(int)$_GET["id_departamento"];
            
            $departamento=new T_Departamento();
            $departamento->deleteBy("id_departamento",$id_departamento); 
        }
        $this->redirect("T_Departamento", "index");
    }
    
    
    public function hola(){
        $t_departamentos=new T_DepartamentoModel();
        $tbldep=$t_departamentos->getUnTbldepartamento();
        var_dump($tbldep);
    }

    public function cargarDepartamentos(){
         $t_departamento=new T_Departamento();
        
        //Conseguimos todos los departamentos
        $alldepartamentos=$t_departamento->getAll("id_departamento");

        return  $alldepartamentos;

    }

}
?>