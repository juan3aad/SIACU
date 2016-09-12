<?php
class TblmotivoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblmotivo
        $tblmotivo=new Tblmotivo();
        
        //Conseguimos todos los motivos
        $allmotivos=$tblmotivo->getAll("secmotivo");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblmotivo",array(
            "allmotivos"=>$allmotivos,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["desmotivo"])){
            
            //Creamos un motivo
            $tblmotivo=new Tblmotivo();
            $tblmotivo->setSecMotivo($_POST["secmotivo"]);
            $tblmotivo->setDesMotivo($_POST["desmotivo"]);
            $tblmotivo->setEstado($_POST["estado"]);
            
            
            $save=$tblmotivo->save();
        }
        $this->redirect("Tblmotivo", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $secmotivo=(int)$_GET["id"];
            
            $motivo=new Tblmotivo();
            $motivo->deleteBy("secmotivo",$secmotivo); 
        }
        //$this->redirect();
        $this->redirect("Tblmotivo", "index");
    }
    
    
    public function hola(){
        $tblmotivos=new TblmotivoModel();
        $tblmot=$tblmotivos->getUnTblmotivo();
        var_dump($tblmot);
    }

    public function cargarMotivos(){

         $tblmotivo=new Tblmotivo();
        
        //Conseguimos todos los motivos
        $allmotivos=$tblmotivo->getAll("secmotivo");

        return  $allmotivos;

    }

}
?>