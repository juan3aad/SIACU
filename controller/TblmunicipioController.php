<?php
class TblmunicipioController extends ControladorBase{
    
      
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto municipio
        $tblmunicipio=new Tblmunicipio();
        
        //Conseguimos todos los municipio
       // $allmunicipios=$tblmunicipio->getAll("id_municipio");
       
        //Cargamos la vista index y le pasamos valores
       /* $this->view("T_Municipio",array(
            "allmunicipios"=>$allmunicipios,
            "Hola"    =>"Soy"
        ));*/
    }
    
    public function cargarMunicipios($valor){
         $t_municipio=new Tblmunicipio();
        
        //Conseguimos todos los departamentos
        $allMunicipios=$t_municipio->getBy("id_departamento",$valor);

        return  $allMunicipios;

    }

}
?>