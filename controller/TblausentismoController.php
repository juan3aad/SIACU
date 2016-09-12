<?php
class TblausentismoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblpersona
        $tblausentismo=new Tblausentismo();
        
        //Conseguimos todas los personas
        $allausentismos=$tblausentismo->getAll("secausentismo");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblAusentismo",array(
            "allausentismos"=>$allausentismos,
            "Hola"    =>"JAmes"
        ));
    }
    
    public function crear(){
        if(isset($_POST["secausentismo"])){
            
            //Creamos una persona
            $tblausentismo=new Tblausentismo();
            $tblausentismo->setSecPersona($_POST["secPersona"]);
            $tblausentismo->setSecMotivo($_POST["secMotivo"]);
            $tblausentismo->setSecPersona($_POST["secPersona"]);
            $tblausentismo->setFechaHoraSolicitud($_POST["fechaSol"]);
            $tblausentismo->setFechaHoraSalida($_POST["fechaSal"]);

            $tblausentismo->setFechaHoraLlegada($_POST["fechaReg"]);
            $tblausentismo->setSecEstadoPermiso($_POST["estaPermiso"]);
            
            $save=$tblausentismo->save();
        }
        $this->redirect("Tblausentismo", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $secausentismo=(int)$_GET["id"];
            
            $ausentismo=new Tblausentismo();
            $ausentismo->deleteBy("secausentismo",$secausentismo); 
        }
        $this->redirect("Tblausentismo", "index");
    }
    
    
    public function hola(){
        $tblausentismo=new TblausentismoModel();
        $Tblause=$tblausentismo->getUnTblausentismo();
        var_dump($tblause);
    }

}
?>