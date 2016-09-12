<?php
class T_Tipo_CargoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto t_tipo_cargo
        $t_tipo_cargo=new T_Tipo_Cargo();
        
        //Conseguimos todos los motivos
        $alltiposcargo= $t_tipo_cargo->getAll("id_tipo_cargo");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Tipo_Cargo",array(
            "alltiposcargo"=>$alltiposcargo,
            "Hola"    =>"Soy"
        ));
    }
    //---------------
    public function crear(){
        if(isset($_POST["des_tipo_cargo"])){
            
            //Creamos un pais
            $t_tipo_cargo=new T_Tipo_Cargo();
            //$t_tipo_cargo->setId_Tipo_Cargo($_POST["id_tipo_cargo"]);
            $t_tipo_cargo->setCod_Tipo_Cargo($_POST["cod_tipo_cargo"]);
            $t_tipo_cargo->setDes_Tipo_Cargo($_POST["des_tipo_cargo"]);
         
            
            $save=$t_tipo_cargo->save();
        }
        $this->redirect("T_Tipo_Cargo", "index");
    }
    
    //----------------------
    public function borrar(){
    
        if(isset($_GET["id_tipo_cargo"])){ 
            $id_tipo_cargo=(int)$_GET["id_tipo_cargo"];
            
            $t_tipo_cargo=new T_Tipo_Cargo();
            $t_tipo_cargo->deleteBy("id_tipo_cargo",$t_tipo_cargo); 
        }
        $this->redirect("T_Tipo_Cargo", "index");
    }

   
    //-----------------------
    public function  cargarTipoCargo(){

         $t_tipo_cargo=new T_Tipo_Cargo();
        
        //Conseguimos todos los cargos
        $alltiposcargo=$t_tipo_cargo->getAll("id_tipo_cargo");

        return  $alltiposcargo;

    }

    
    
     
}
?>