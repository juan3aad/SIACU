<?php
class T_PersonaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblpersona
        $t_persona=new T_Persona();
        
        //Conseguimos todas los personas
        $allpersonas=$t_persona->getAll("idpersona");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("t_persona",array(
            "allpersonas"=>$allpersonas,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
    
    public function crear(){
        if(isset($_POST["primer_nombre"])){
            
            //Creamos una persona
            $tblpersona=new T_Persona();
            //$tblpersona->setSecestado_Civil($_POST["secestado_civil"]);
            $tblpersona->setPrimer_Nombre($_POST["segundo_nombre"]);
            $tblpersona->setSegundo_Nombre($_POST["primer_nombre"]);
            $tblpersona->setPrimer_Apellido($_POST["primer_apellido"]);
            $tblpersona->setSegundo_Apellido($_POST["segundo_apellido"]);
            $tblpersona->setId_Tipo_Documento($_POST["tipo_Identificacion"]);
            $tblpersona->setNumero_Identidad($_POST["numero_identidad"]);
            $tblpersona->setId_Sexo($_POST["id_sexo"]);
            $tblpersona->setFecha_Nacimiento($_POST["fecha_nacimiento"]);
            $tblpersona->setId_Pais($_POST["id_pais"]);
            $tblpersona->setId_Departamento_Nacimiento($_POST["id_departamento_nacimiento"]);
            $tblpersona->setId_Municipio_Nacimiento($_POST["id_municicipio_nacimiento"]);
            $tblpersona->setDireccion($_POST["direccion"]);
            
            //$tblpersona->setRuta_Fotografia($_POST["ruta_fotografia"]);
            
         
            $save=$tblpersona->save();
        }
        $this->redirect("T_persona", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["idpersona"])){ 
            $secpersona=(int)$_GET["idpersona"];
            
            $persona=new T_Persona();
            $persona->deleteBy("idpersona",$idpersona); 
        }
        $this->redirect("T_persona", "index");
    }
    
    
    public function hola(){
        $tblpersonas=new TblpersonaModel();
        $Tblper=$tblpersonas->getUnTblpersona();
        var_dump($tblper);
    }

}
?>
