<?php
class TbldependenciaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tbldependencia
        $tbldependencia=new Tbldependencia();
        
        //Conseguimos todas los personas
        $alldependencias=$tbldependencia->getAll("secdependencia");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tbldependencia",array(
            "alldependencias"=>$alldependencias,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
    
    public function crear(){
        if(isset($_POST["numdependencia"])){
            
            //Creamos una dependencia
            $tbldependencia=new Tbldependencia();
            $tbldependencia->setSecDependencia($_POST["secdependencia"]);
            $tbldependencia->setNumDependencia($_POST["numdependencia"]);
            $tbldependencia->setDesDependencia($_POST["desdependencia"]);
            $tbldependencia->setEstado($_POST["estado"]);
            
            $save=$tbldependencia->save();
        }
        $this->redirect("Tbldependencia", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $secdependencia=(int)$_GET["id"];
            
            $dependencia=new Tbldependencia();
            $dependencia->deleteBy("secdependencia",$secdependencia); 
        }
        $this->redirect("Tbldependencia", "index");
    }
    
    
    public function hola(){
        $tbldependencias=new TbldependeciaModel();
        $Tbldep=$tbldependencias->getUnTbldependencia();
        var_dump($tbldep);
    }

}
?>