<?php

class TblcargoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblcargo
        $tblcargo=new Tblcargo();
        
        //Conseguimos todas los personas
        $allcargos=$tblcargo->getAll("seccargo");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblcargo",array(
            "allcargos"=>$allcargos,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
    
    public function crear(){
        if(isset($_POST["codcargo"])){
            
            //Creamos un cargo
            $tblcargo=new Tblcargo();
            $tblcargo->setCodCargo($_POST["codcargo"]);
            $tblcargo->setDesCargo($_POST["descargo"]);
            $tblcargo->setEstado($_POST["estado"]);
            
            $save=$tblcargo->save();
        }
        $this->redirect("Tblcargo", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $seccargo=(int)$_GET["id"];
            
            $cargo=new Tblcargo();
            $cargo->deleteBy("seccargo",$seccargo); 
        }
       $this->redirect("Tblcargo", "index");
    }
    
    
    public function hola(){
        $tblcargos=new TblcargoModel();
        $Tblcar=$tblcargos->getUnTblpersona();
        var_dump($tblcar);
    }

}

?>