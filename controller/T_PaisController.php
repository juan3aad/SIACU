<?php
class T_PaisController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto T_Pais
        $t_pais=new T_Pais();
        
        //Conseguimos todos los motivos
        $allpaises=$t_pais->getAll("id_pais");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("t_pais",array(
            "allpaises"=>$allpaises,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["des_pais"])){
            
            //Creamos un pais
            $t_pais=new T_Pais();
            $t_pais->setCod_Pais($_POST["cod_pais"]);
            $t_pais->setDes_Pais($_POST["des_pais"]);
         
            
            $save=$t_pais->save();
        }
        $this->redirect("T_Pais", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id_pais"])){ 
            $id_pais=(int)$_GET["id_pais"];
            
            $pais=new T_Pais();
            $pais->deleteBy("id_pais",$id_pais); 
        }
        $this->redirect("T_Pais", "index");
    }
    
    
    public function hola(){
        $t_paises=new T_PaisModel();
        $t_pais=$t_paises->getUnTbldepartamento();
        var_dump($t_pais);
    }

     public function cargarPaises(){

         $t_pais=new T_Pais();
        
        //Conseguimos todos los paises
        $allpaises=$t_pais->getAll("id_pais");

        return  $allpaises;

    }

}
?>