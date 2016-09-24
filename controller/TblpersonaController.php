<?php
class TblpersonaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto Tblpersona
        //$tblpersona=new Tblpersona();
        
        //Conseguimos todas los personas
        //$allpersonas=$tblpersona->getAll("id_persona");
       
        //Cargamos la vista index y le pasamos valores
        $this->view("tblpersona",array(
            "allpersonas"=>$allpersonas,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
    
    public function index2(){
        //Creamos el objeto Tblpersona
        $tblpersona=new Tblpersona();
        
        //Conseguimos todas los personas
        $allpersonas=$tblpersona->getAll("id_persona");
        
        //Cargamos la vista index y le pasamos valores
        $this->view("paginacionPersona",array(
                   "allpersonas"=>$allpersonas, 
                  "Hola"=>"juan Agreda"
        ));
    }
            
    
    public function crear(){
        if(isset($_POST["primer_nombre"])){
            
            //Creamos una persona
            $tblpersona=new Tblpersona();
            $tblpersona->setId_Estado_Civil($_POST["id_estado_civil"]);
            $tblpersona->setId_Sexo($_POST["id_sexo"]);
            $tblpersona->setId_Municipio($_POST["id_municipio"]);
            $tblpersona->setDireccion($_POST["direccion"]);
            $tblpersona->setFecha_Nacimiento($_POST["fecha_nacimiento"]);
            $tblpersona->setRuta_Fotografia($_POST["ruta_fotografia"]);
            $tblpersona->setTipo_Identificacion($_POST["tipo_Identificacion"]);
            $tblpersona->setNumero_Identificacion($_POST["numero_identificacion"]);
            $tblpersona->setPrimer_Nombre($_POST["primer_nombre"]);
            $tblpersona->setSegundo_Nombre($_POST["segundo_nombre"]);
            $tblpersona->setPrimer_Apellido($_POST["primer_apellido"]);
            $tblpersona->setSegundo_Apellido($_POST["segundo_apellido"]);
            $tblpersona->setTelefono($_POST["telefono"]);
            $tblpersona->setCelular($_POST["celular"]);
            $tblpersona->setEmail($_POST["email"]);
            
            $save=$tblpersona->save();
        }
        $this->redirect("Tblpersona", "index");
    }
    
    public function borrar(){
    
        if(isset($_GET["id"])){ 
            $secpersona=(int)$_GET["id"];
            
            $persona=new Tblpersona();
            $persona->deleteBy("id_persona",$secpersona); 
        }
        $this->redirect("Tblpersona", "index2");
    }
    
    //----------------------
    public function hola(){
        $tblpersonas=new TblpersonaModel();
        $Tblper=$tblpersonas->getUnTblpersona();
        var_dump($tblper);
    }
    
    //-----------------
        //---------------------------------
    public function buscarUsuario($tipo,$dato){
           
            $persona=new Tblpersona();
            if($tipo=='2')
            {
                $columna="CONTRATO_AFIL";
                $allusers=$persona->getBy($columna,$dato); 
            }   
            else
            {
                $columna="numero_identificacion";
                $columna1="tipo_identificacion";
                
               
                $allusers=$persona->getByEsp($columna, $dato, $columna1, $tipo);
               
                
            }

            
            if(count($allusers)>0)
            {
              
                //return 1;
                return $allusers;
               
            }
            else
            {
              
              
              return 0;
               

               
            }
            return $allusers;
       
      }
      //-------------
      public function prueba()
      {
          
            $tblpersona=new Tblpersona();
             //Conseguimos todas los personas
            $allpersonas=$tblpersona->getAll("id_persona");
            return $allpersonas;
          
      }
      //-----------------------
       public function actualizar($scriptValor,$id_persona){
       $res=0;
       if(isset($_POST["tpnombre"]))//Verifica si existe el campo para proceder a realizar el ingreso del registro
       {
           $campo= new Tblpersona();
           
           //retornamos el resultado
           $res=$campo->update($scriptValor,$id_persona);
           
       }
       return $res;
   }
}
?>