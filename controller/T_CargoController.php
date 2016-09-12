<?php
class T_CargoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto t_tipo_cargo
        $t_cargo=new T_Cargo();
        
        //Conseguimos todos los motivos
        $allcargos= $t_cargo->getAll("id_cargo");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Cargo",array(
            "allcargos"=>$allcargos,
            "Hola"    =>"Soy"
        ));
    }
    //---------------
    public function crear(){
        if(isset($_POST["des_cargo"])){
            
            //Creamos un cargo
            $t_cargo=new T_Cargo();
            //$t_tipo_cargo->setId_Cargo($_POST["id_cargo"]);
            $t_cargo->setCod_Cargo($_POST["cod_cargo"]);
            $t_cargo->setDes_Cargo($_POST["des_cargo"]);
         
            
            $save=$t_cargo->save();
        }
        $this->redirect("T_Cargo", "index");
    }
    
    //----------------------
    public function borrar(){
    
        if(isset($_GET["id_cargo"])){ 
            $id_cargo=(int)$_GET["id_cargo"];
            
            $t_cargo=new T_Tipo_Cargo();
            $t_cargo->deleteBy("id_cargo",$id_cargo); 
        }
        $this->redirect("T_Cargo", "index");
    }

   
    //-----------------------


    
    
     
}
?>