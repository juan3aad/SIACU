<?php
class Tblestado_civilController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblestado_civil
        $tblestado_civil=new Tblestado_civil();
        
        //Conseguimos todas los estados civiles
        $allciviles=$tblestado_civil->getAll("secestado_civil");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblestado_civil",array(
            "allciviles"=>$allciviles,
            "Hola"    =>"Soy"
        ));
    }
    
    public function crear(){
        if(isset($_POST["codestado_civil"])){
            
            //Creamos un estado civil
            $tblcivil=new Tblestado_civil();
            $tblcivil->setSecEstado_Civil($_POST["secestado_civil"]);
            $tblcivil->setCodEstado_Civil($_POST["codestado_civil"]);
            $tblcivil->setDesEstado_Civil($_POST["desestado_civil"]);
           
            
            $save=$tblcivil->save();
        }
        $this->redirect("Tblestado_civil", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $secestado_civil=(int)$_GET["id"];
            
            $civil=new Tblestado_civil();
            $civil->deleteBy("secestado_civil",$secestado_civil); 
        }
         $this->redirect("Tblestado_civil", "index");
    }
    
    
    public function hola(){
        $tblciviles=new Tblestado_civilModel();
        $tblciv=$tblciviles->getUnTblestado_civil();
        var_dump($tblciv);
    }

}
?>