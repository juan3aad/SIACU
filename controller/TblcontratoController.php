<?php

class TblcontratoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblcontrato
        $tblcontrato=new Tblcontrato();
        
        //Conseguimos todas los contratos
        $allcontratos=$tblcontrato->getAll("sectipo_contrato");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblcontrato",array(
            "allcontratos"=>$allcontratos,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["codtipo_contrato"])){
            
            //Creamos un contrato
            $tblcontrato=new Tblcontrato();
            $tblcontrato->setCodtipo_Contrato($_POST["codtipo_contrato"]);
            $tblcontrato->setDestipo_Contrato($_POST["destipo_contrato"]);
            
            
            $save=$tblcontrato->save();
        }
        $this->redirect("Tblcontrato", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $sectipo_contrato=(int)$_GET["id"];
            
            $contrato=new Tblcontrato();
            $contrato->deleteBy("sectipo_contrato",$sectipo_contrato); 
        }
        $this->redirect("Tblcontrato", "index");
    }
    
    
    public function hola(){
        $tblcontratos=new Tbltipo_contratoModel();
        $Tblcon=$tblcontratos->getUnTbltipo_contrato();
        var_dump($Tblcon);
    }

}

?>