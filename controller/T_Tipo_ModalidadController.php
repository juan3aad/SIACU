<?php
class T_Tipo_ModalidadController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto T_modalidad
        $t_tipo_modalidad=new T_Tipo_Modalidad();
        
        //Conseguimos todos los motivos
        $alltiposmodalidad= $t_tipo_modalidad->getAll("id_tipo_modalidad");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Tipo_Modalidad",array(
            "alltiposmodalidad"=>$alltiposmodalidad,
            "Hola"    =>"Soy"
        ));
    }
    //---------------
    public function crear(){
        if(isset($_POST["des_tipo_modalidad"])){
            
            //Creamos un modalidad
            $t_tipo_modalidad=new T_Tipo_Modalidad();
            $t_tipo_modalidad->setId_Tipo_Modalidad($_POST["id_tipo_modalidad"]);
            $t_tipo_modalidad->setDes_Tipo_Modalidad($_POST["des_tipo_modalidad"]);
            $t_tipo_modalidad->setId_Tipo_Educacion($_POST["id_tipo_educacion"]);
         
            
            $save=$t_tipo_modalidad->save();
        }
        $this->redirect("T_Tipo_Modalidad", "index");
    }
    
    //----------------------
    public function borrar(){
    
        if(isset($_GET["id_tipo_modalidad"])){ 
            $id_tipo_modalidad=(int)$_GET["id_tipo_modalidad"];
            
            $t_tipo_modalidad=new T_Tipo_Modalidad();
            $t_tipo_modalidad->deleteBy("id_tipo_modalidad",$id_tipo_modalidad); 
        }
        $this->redirect("T_Tipo_Modalidad", "index");
    }

   
    //-----------------------
    public function  cargarTipoModalidad(){

         $t_tipo_modalidad=new T_Tipo_Modalidad();
        
        //Conseguimos todos los tipos de modalidad
        $alltiposmodalidad=$t_tipo_modalidad->getAll("id_tipo_modalidad");

        return  $alltiposmodalidad;

    }

    
    
     
}
?>