<?php
class T_Tipo_EducacionController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto T_Pais
        $t_tipo_educacion=new T_Tipo_Educacion();
        
        //Conseguimos todos los motivos
        $alltiposeducacion= $t_tipo_educacion->getAll("id_tipo_educacion");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Tipo_Educacion",array(
            "alltiposeducacion"=>$alltiposeducacion,
            "Hola"    =>"Soy"
        ));
    }
    //---------------
    public function crear(){
        if(isset($_POST["des_tipo_empresa"])){
            
            //Creamos un pais
            $t_tipo_educacion=new T_Tipo_Educacion();
            $t_tipo_educacion->setId_Tipo_Educacion($_POST["id_tipo_educacion"]);
            $t_tipo_educacion->setCod_Tipo_Educacion($_POST["cod_tipo_educacion"]);
            $t_tipo_educacion->setDes_Tipo_Educacion($_POST["des_tipo_educacion"]);
         
            
            $save=$t_tipo_educacion->save();
        }
        $this->redirect("T_Tipo_Educacion", "index");
    }
    
    //----------------------
    public function borrar(){
    
        if(isset($_GET["id_tipo_educacion"])){ 
            $id_tipo_educacion=(int)$_GET["id_tipo_educacion"];
            
            $t_tipo_educacion=new T_Tipo_Educacion();
            $t_tipo_educacion->deleteBy("id_tipo_educacion",$t_tipo_educacion); 
        }
        $this->redirect("T_Tipo_Educacion", "index");
    }

   
    //-----------------------
    public function  cargarTipoEducacion(){

         $t_tipo_educacion=new T_Tipo_Educacion();
        
        //Conseguimos todos los paises
        $alltiposeducacion=$t_tipo_educacion->getAll("id_tipo_educacion");

        return  $alltiposeducacion;

    }

    
    
     
}
?>