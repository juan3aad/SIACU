<?php
class T_MunicipioController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto municipio
        $tblmunicipio=new T_Municipio();
        
        //Conseguimos todos los municipio
        //$allmunicipios=$tblmunicipio->getAll("id_municipio");
        $allmunicipios=$tblmunicipio->getAllEsp("id_departamento","t_departamento","des_departamento");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("T_Municipio",array(
            "allmunicipios"=>$allmunicipios,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["des_municipio"])){
            
            //Creamos un municipio
            $tblmunicipio=new T_Municipio();
            $tblmunicipio->setId_Municipio($_POST["id_municipio"]);
            $tblmunicipio->setCod_Municipio($_POST["cod_municipio"]);
            $tblmunicipio->setDes_Municipio($_POST["des_municipio"]);
            $tblmunicipio->setId_Departamento($_POST["id_departamento"]);
         
            
            
            $save=$tblmunicipio->save();
        }
        $this->redirect("T_Municipio", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id_municipio"])){ 
            $secmunicipio=(int)$_GET["id_municipio"];
            
            $municipio=new T_Municipio();
            $municipio->deleteBy("id_municipio",$secmunicipio); 
        }
        $this->redirect("T_Municipio", "index");
    }
    
    
    public function hola(){
        $tblmunicipios=new T_MunicipioModel();
        $tblmun=$tblmunicipios->getUnT_Municipios();
        var_dump($tblmun);
    }

}
?>